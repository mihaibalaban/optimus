<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
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
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo-menu.gif', ['alt' => Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top hideMenu',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index'], 'options' => ['class' => ' btn btn-2']],
        ['label' => 'Servicii', 'url' => ['/site/services'], 'options' => ['class' => ' btn btn-2']],
        ['label' => 'Despre noi', 'url' => ['/site/about'], 'options' => ['class' => ' btn btn-2']],
        ['label' => 'Parteneri', 'url' => ['/site/partners'], 'options' => ['class' => ' btn btn-2']],
        ['label' => 'Contact', 'url' => ['/site/contact'], 'options' => ['class' => ' btn btn-2']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup'], 'options' => ['class' => ' btn btn-2']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login'], 'options' => ['class' => ' btn btn-2']];
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

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <img class="pull-left footerImage" src="images/footer.gif">
        <div class="row">
            <div class="col-lg-2">
                <h4>Despre noi</h4>
            </div>
            <div class="col-lg-2">
                <h4>Contacteaza-ne</h4>
            </div>
            <div class="col-lg-2">
                <h4>Suport</h4>
            </div>
            <div class="col-lg-2">
                <img class="footerLogos" src="images/facebook-logo.png">
                <img class="footerLogos" src="images/google-plus.png">
                <img class="footerLogos" src="images/twitter-logo.png">
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
