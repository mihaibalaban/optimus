<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<link rel="shortcut icon" href="<?php echo Yii::$app->getHomeUrl(); ?>/otFavicon.png" type="image/x-icon"/>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody();
$model = new \frontend\models\FictiveEmails() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo-menu.gif', ['alt' => Yii::$app->name, 'class' => 'menuLogo']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top hideMenu',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index'], 'options' => ['class' => ' btn btn-2']],
        ['label' => 'Servicii', 'url' => ['/site/services'], 'options' => ['class' => ' btn btn-2']],
        ['label' => 'Parteneri', 'url' => ['/site/partners'], 'options' => ['class' => ' btn btn-2']],
        ['label' => 'Cariere', 'url' => ['/site/carriers'], 'options' => ['class' => ' btn btn-2']],
        ['label' => 'Despre noi', 'url' => ['/site/about'], 'options' => ['class' => ' btn btn-2']],
        ['label' => 'Contact', 'url' => ['/site/contact'], 'options' => ['class' => ' btn btn-2']],
    ];
    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup'], 'options' => ['class' => ' btn btn-2']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login'], 'options' => ['class' => ' btn btn-2']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container" style="width: 100%; padding: 0;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="linkFooter footerBigElements">
                    <h3 style=" text-decoration: underline">Linkuri utile:</h3>
                    <li><?= Html::a('Despre
                        Optimus Transport', ['/site/about'], []) ?></li>
                    <li><?= Html::a('Despre Wtransnet', 'http://www.wtransnet.com/en/company/', []) ?></li>
                    <li><?= Html::a('Despre OT Solutions', 'https://otsolutions.bg/about-us', []) ?></li>
                    <h4></h4>
                </div>

                <div class="footerBigElements">
                    <i class="glyphicon glyphicon-earphone custom-time-glyph"></i>
                    <h3 style=" display: inline-block;text-decoration: underline">Asistenta telefonica</h3>
                    <h4 class="paddingFooterElements">Luni - Vineri: 09:00 - 18:00</h4>
                    <h4 class="paddingFooterElements">Telefon: 0769.026.009 (Optimus Transport)</h4>
                    <h4 class="paddingFooterElements">Telefon: 0755.017.888 (Wtransnet Romania)</h4>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="footerBigElements">
                    <i style="" class="glyphicon glyphicon-time custom-time-glyph"></i>
                    <h3 style="display: inline-block; text-decoration: underline">Program NON-STOP</h3>
                    <h4 class="paddingFooterElements">Oferim suport si in afara orelor de program, timpul de raspuns
                        fiind de 90 de minute</h4>
                </div>
                <div class="footerBigElements" style="list-style-type: none;">
                    <h3 style=" text-decoration: underline">Follow Us</h3>
                    <li class="paddingFooterElements" style="display: inline-block"><a
                                href="https://www.facebook.com/optimustransportsrl/">
                            <img class="footerLogos" src="images/facebook-logo.png">
                        </a>
                    </li>
                    <img style="display: inline-block" class="footerLogos" src="images/google-plus.png">
                    <img style="display:    inline-block" class="footerLogos" src="images/twitter-logo.png">
                </div>
                <div class="footerBigElements">
                    <h3 style=" text-decoration: underline">Rezervari Feribot</h3>
                    <h4 class="paddingFooterElements">Luni - Duminica: NON-STOP</h4>
                    <h4 class="paddingFooterElements">Telefon: 0769.026.009</h4>
                </div>
            </div>

            <div class="col-lg-4">

                <div class="footerBigElements">
                    <h3 style=" text-decoration: underline">Aboneaza-te la newsletter:</h3>
                    <h4 class="paddingFooterElements">Primeste informatii cu privire la situatia din porturi</h4>
                    <?php $form = ActiveForm::begin(['action' => 'fictive-email']); ?>

                    <?= $form->field($model, 'name')->textInput() ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'phone') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Trimite', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footerFooter">
        <div class="textFooter">
            © 2010 - <?= date('Y') ?> Optimus Transport
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
