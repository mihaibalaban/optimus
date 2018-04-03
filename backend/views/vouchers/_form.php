<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vouchers */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
foreach (range(7, 20) as $number) {
    $truckLengthRange[$number] = $number;
}
?>

<div class="vouchers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'truck')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'truck_length')->dropDownList(
        $truckLengthRange
    ) ?>

    <?= $form->field($model, 'route')->dropDownList(
        ['CA-DO'=>'CA-DO', 'DO-CA'=>'DO-CA']
    ) ?>

    <?= $form->field($model, 'reference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voucher')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'invoice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temporization')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
