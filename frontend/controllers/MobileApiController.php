<?php

namespace frontend\controllers;

use frontend\models\Countryes;
use frontend\models\FictiveEmails;
use frontend\models\Routes;
use frontend\models\UploadCvForm;
use frontend\models\Users;
use frontend\models\Vouchers;
use Yii;
use yii\base\InvalidParamException;
use yii\helpers\Json;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\UploadedFile;
use yii\web\User;

/**
 * Site controller
 */
class MobileApiController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'update-voucher'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['update-voucher'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'update-voucher' => ['post'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionGenerateVoucher()
    {
        $voucher = Vouchers::find()
            ->select("*")
            ->where(["or", ["temporization" => NULL], ['<=', "temporization", time()]])
            ->asArray()
            ->one();
        if ($voucher) {
            $voucher = Vouchers::findOne($voucher['id']);
            $voucher->temporization = strtotime("+10 minutes");
            if ($voucher->save()) {

                return Json::encode($voucher);
            } else {

                return Json::encode(['error' => "voucher can't be generated"]);
            }
        } else {

            return Json::encode(['error' => "there are not eligible vouchers"]);
        }

    }

    public function actionUpdateVoucher()
    {
        if (Yii::$app->request->isPost) {
            $voucher_id = Yii::$app->request->post()['voucher_id'];
            $voucherUpdated = Yii::$app->request->post();
            $voucher = Vouchers::findOne($voucher_id);
            unset($voucherUpdated['voucher_id']);
            $voucherUpdated['temporization'] = strtotime("+10 minutes");
            Yii::warning($voucherUpdated);

            if ($voucher->load($voucherUpdated, "")) {
                if ($voucher->save()) {
                    return Json::encode($voucher);
                }
            } else {
                return Json::encode(['error' => 'model not saved']);
            }
        }
    }

    public function actionGetAllVouchers(){
        $vouchers = Vouchers::find()->all();

        return Json::encode($vouchers);
    }

    public function actionGetSpecificVouchers(){

        if (Yii::$app->request->isPost) {
            $voucher = Vouchers::findOne(['id'=>Yii::$app->request->post()['voucher_id']]);
            if($voucher){

                return Json::encode($voucher);
            }else{

                return Json::encode(['error' => 'voucher not found']);
            }
        }
    }

    public function actionAssignNewUser()
    {
        if (Yii::$app->request->isPost) {
            $newUser = new Users();
            if ($newUser->load(Yii::$app->request->post(), "")) {
                $newUser->status = 0; // request sent by user

                if ($newUser->save()) {
                    return Json::encode(['message' => 'Asteapta confirmarea']);
                }
            }
        }
    }

    public function actionVerifyUserEligibility()
    {
        if (Yii::$app->request->isPost) {
            $user_uuid = Yii::$app->request->post()['uuid'];
            $user = Users::findOne(['uuid' => $user_uuid]);
            Yii::warning($user['status']);

            if ($user) {
                if ($user['status'] == 1) {

                    return Json::encode(['eligible' => true]);
                }else if ($user['status'] == 0){

                    return Json::encode(['message' => 'Need to wait to be accepted by provider']);
                }
            } else {

                return Json::encode(['eligible' => false,'message' => 'You are not eligible']);
            }
        }
    }

}