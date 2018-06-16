<?php

namespace backend\controllers;

use backend\models\AttributeValue;
use backend\models\UploadVoucherForm;
use Yii;
use frontend\models\Vouchers;
use backend\models\VouchersSearch;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\export\ExportMenu;
use yii\web\UploadedFile;

/**
 * VouchersController implements the CRUD actions for Vouchers model.
 */
class VouchersController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Vouchers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VouchersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $model = new UploadVoucherForm();
        $vouchersWithProblems = [];

        if (Yii::$app->request->isPost) {
            $model->cvFile = UploadedFile::getInstance($model, 'cvFile');
            $model->upload();
            $filename = 'uploads/invoices.xls';
            ini_set('memory_limit', '-1');
            set_time_limit(1500);
            $data = \moonland\phpexcel\Excel::import($filename, []); // $config is an optional

            $ca_do = 0;
            $do_ca = 0;
            foreach ($data as $v) {
                if ($v['FAIDRO'] == 100) {
                    $ca_do++;
                } else {
                    $do_ca++;
                }
                $baf_ca_do = $data[sizeof($data) - 2]['FARIIM'];
                $baf_do_ca = $data[sizeof($data) - 1]['FARIIM'];
            }
            $calc_baf_ca_do = $baf_ca_do / $ca_do;
            $calc_baf_do_ca = $baf_do_ca / $do_ca;
            foreach ($data as $v) {

                $voucherToUpdate = Vouchers::find()->where(['voucher' => substr($v['FANUBI'], 2)])->andWhere(['reference' => $v['FAMOTR']])->one();
                $voucherProblems = Vouchers::find()->where(['voucher' => substr($v['FANUBI'], 2)])->orWhere(['reference' => $v['FAMOTR']])->one();
                if ($voucherToUpdate) {
                    $voucherToUpdate->price = $v['FARIIM'];
                    if ($voucherToUpdate['route'] == 'CA-DO') {
                        $voucherToUpdate->baf = $calc_baf_ca_do;
                    } elseif ($voucherToUpdate['route'] == 'DO-CA') {
                        $voucherToUpdate->baf = $calc_baf_do_ca;
                    }
                    $voucherToUpdate->total = $v['FARIIM'] + $voucherToUpdate->baf;
                    $voucherToUpdate->invoice = $v['FATRDT'];

                    $voucherToUpdate->total = $voucherToUpdate->total + $voucherToUpdate->goods;

                    if($voucherToUpdate->drivers >= 3){
                        $voucherToUpdate->total = $voucherToUpdate->total + (($voucherToUpdate->drivers - 2) * 30);
                    }
                    $voucherToUpdate->save();

                } else if ($voucherProblems) {
                    $vouchersWithProblems[] = $voucherProblems;
                }

            }
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'model' => $model,
            'vouchersWithProblems' => $vouchersWithProblems,
            'dataProvider' => $dataProvider,
            'time' => date('H:i:s')
        ]);
    }

    /**
     * Displays a single Vouchers model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Vouchers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Vouchers();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionGenerateVoucher()
    {
        $voucher = Vouchers::find()
            ->select("*")
            ->where(["or", ["temporization" => NULL], ['<=', "temporization", time()]])
            ->andWhere(['date' => null, 'reference' => null, 'truck' => null])
            ->asArray()
            ->one();

        if ($voucher) {
            $voucher = Vouchers::findOne($voucher['id']);
            $voucher->temporization = strtotime("+6 seconds");
            if ($voucher->save()) {

                return $this->render('update', [
                    'model' => $this->findModel($voucher['id']),
                ]);
            } else {
                throwException('voucher can\'t be generated');
            }
        } else {
            throwException('there are not eligible vouchers');
        }

    }

    /**
     * Updates an existing Vouchers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $voucher = Yii::$app->request->post('Vouchers');

        if ($model->load($voucher, '') && $model->save()) {
            Yii::$app->getSession()->setFlash('success', 'Voucher successfully saved');
        } else {
            if (Yii::$app->request->isAjax) {
                return $this->renderAjax('update', [
                    'model' => $model,
                ]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    public function actionSettings()
    {
        $attributes = AttributeValue::find()
            ->select("*")
            ->joinWith('idAttribute')
            ->all();
//        var_dump($attributes);
//die;
        return $this->render('settings', [
            'model' => $attributes,
        ]);

    }

    /**
     * Deletes an existing Vouchers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $voucher = $this->findModel($id);
        $voucher['date'] = null;
        $voucher['truck'] = null;
        $voucher['truck_length'] = null;
        $voucher['route'] = null;
        $voucher['reference'] = null;
        $voucher['price'] = null;
        $voucher['baf'] = null;
        $voucher['invoice'] = null;
        $voucher['temporization'] = null;
        $voucher['owner'] = null;
        $voucher['total'] = null;
        $voucher->save();


        return $this->redirect(['index']);
    }

    /**
     * Finds the Vouchers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Vouchers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vouchers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionExport()
    {
        $file = \Yii::createObject([
            'class' => 'codemix\excelexport\ExcelFile',
            'sheets' => [
                'Users' => [
                    'class' => 'codemix\excelexport\ActiveExcelSheet',
                    'query' => Vouchers::find(),
                ]
            ]
        ]);
        $file->send('vouchere.xlsx');
    }

    public function actionMultiple($howMuch)
    {
        $vouchers = Vouchers::find()
            ->select("*")
            ->where(["or", ["temporization" => NULL], ['<=', "temporization", time()]])
            ->andWhere(['date' => null, 'reference' => null, 'truck' => null])
            ->asArray()
            ->limit($howMuch)
            ->all();
        $counter = 0;

        if ($vouchers) {
            foreach ($vouchers as $voucher) {
                $voucher = Vouchers::findOne($voucher['id']);
                $voucher->temporization = strtotime("+600 seconds");
                if ($voucher->save()) {
                    $counter++;
                } else {
                    throwException('voucher can\'t be generated');
                }
            }
        } else {
            throwException('there are not eligible vouchers');
        }
        if ($counter == $howMuch) {
            var_dump('am reuist');
        } else {
            var_dump('nu am reusit');
        }

        return $this->render('multiple', [
            'vouchers' => $vouchers
        ]);
    }

}
