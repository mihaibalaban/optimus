<?php

namespace backend\controllers;

use backend\models\UploadVoucherForm;
use Faker\Provider\DateTime;
use frontend\models\Vouchers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $model = new UploadVoucherForm();

        if (Yii::$app->request->isPost) {

            $model->cvFile = UploadedFile::getInstance($model, 'cvFile');
            $model->upload();
            $filename = 'uploads/vouchere.csv';
            ini_set('memory_limit', '-1');
            set_time_limit(1500);
            $data = \moonland\phpexcel\Excel::import($filename, []); // $config is an optional

            foreach ($data as $v) {

                $voucher = new Vouchers();

                if (strlen($v['Date']) > 1) {
                    if(self::validateDate($v['Date'])) {
                        $date = new \DateTime();
                        $date->format('Y-m-d');


                        $voucher->date = $date->format('Y-m-d');
                    }
                } else {
                    $voucher->date = $v['Date'];

                }
                $voucher->truck = $v['Truck'];
                $voucher->truck_length = $v['Length'];
                $voucher->route = $v['Route'];
                $voucher->reference = $v['Ref'];
                $voucher->price = $v['Price'];
                $voucher->baf = $v['BAF'];
                $voucher->voucher = $v['Voucher'];
                $voucher->invoice = $v['INVOICE'];
                $voucher->save();
            }
            if ($model->upload()) {
                return $this->render('index', [
                    'model' => $model
                ]);
            }
        } else {
            return $this->render('index', [
                'model' => $model
            ]);

        }
    }

    function validateDate($date, $format = 'd.m.Y')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }


    public function actionAddVouchers()
    {


    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
