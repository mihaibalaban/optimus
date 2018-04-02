<?php

/* @var $this yii\web\View */

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Salut, <?= Yii::$app->user->identity->username ?> !</h1>
    </div>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'cvFile')->label(false)->widget(FileInput::classname(), [
        'options' => ['multiple' => false],
        'language' => 'en',
        'pluginOptions' => [
            'initialCaption' => "Selecteaza fisierul cu vouchere",
            'showUpload' => false,
            'showCancel' => false,
            'showPreview' => false,
            'showRemove' => false,
            'browseLabel' => 'adauga',
            'mainClass' => 'input-group-lg',
            'fileActionSettings' => [
                'showZoom' => false,
            ],
        ]
    ]); ?>

    <button class="btn btn-primary moreButton">Uploadeaza Vouchere</button>

    <?php ActiveForm::end() ?>
    <div class="body-content">


    </div>
</div>
