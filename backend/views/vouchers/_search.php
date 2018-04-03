<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VouchersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vouchers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'truck') ?>

    <?= $form->field($model, 'truck_length') ?>

    <?= $form->field($model, 'route') ?>

    <?php // echo $form->field($model, 'reference') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'baf') ?>

    <?php // echo $form->field($model, 'voucher') ?>

    <?php // echo $form->field($model, 'invoice') ?>

    <?php // echo $form->field($model, 'temporization') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
