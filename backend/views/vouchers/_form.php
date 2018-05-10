<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vouchers */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
foreach ([7, 9, 10, 12, 17, 19] as $number) {
    $truckLengthRange[$number] = $number;
}
?>

<div class="vouchers-form">

    <?php $form = ActiveForm::begin([
        'action' => Url::toRoute('vouchers/update?id=' . $model->id),
        'options' => ['id' => 'dynamic-form111']
    ]); ?>

    <div class="row">
        <div class="col-lg-6">


            <?= $form->field($model, 'owner')->textInput(['value' => Yii::$app->user->identity->username, 'readOnly' => true]) ?>


            <?= $form->field($model, 'date')->widget(DatePicker::className(), [
                'dateFormat' => 'yyyy-MM-dd',
            ]) ?>

            <?= $form->field($model, 'truck')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'truck_length')->dropDownList(
                $truckLengthRange, ['id' => 'length', 'onchange' => 'changePrice(value)']
            ) ?>
            <?= $form->field($model, 'route')->dropDownList(
                ['CA-DO' => 'CA-DO', 'DO-CA' => 'DO-CA'], ['id' => 'route', 'onchange' => 'changeBaff(value)']
            ) ?>
        </div>
        <div class="col-lg-6">


            <?= $form->field($model, 'reference')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'price')->textInput(['maxlength' => true, 'id' => 'price', 'onchange' => 'changePrice(value)', 'readOnly' => true]) ?>

            <?= $form->field($model, 'baf')->textInput(['id' => 'baf', 'onchange' => 'changeBaff(value)', 'readOnly' => true]) ?>

            <?= $form->field($model, 'total')->textInput(['id' => 'total', 'readOnly' => true]) ?>

            <?= $form->field($model, 'invoice')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>

<script>

    var baf, price;
    changeBaff(document.getElementById('route').value);

    function changeBaff(value) {
        var route = value;
        if (route == 'CA-DO') {
            baf = document.getElementById("baf").value = 3.09;
        } else if (route == 'DO-CA') {
            baf = document.getElementById("baf").value = 3.11;
        }

        document.getElementById("total").value = baf + price;
    }

    changePrice(document.getElementById('length').value);

    function changePrice(value) {
        var length = value;
        if (length == 7) {
            price = document.getElementById("price").value = 91.7;
        } else if (length == 9) {
            price = document.getElementById("price").value = 145.4;
        } else if (length == 10) {
            price = document.getElementById("price").value = 145.4;
        } else if (length == 12) {
            price = document.getElementById("price").value = 168.4;
        } else if (length == 17) {
            price = document.getElementById("price").value = 168.4;
        } else if (length == 19) {
            price = document.getElementById("price").value = 320;
        } else {
            price = document.getElementById("price").value = value;
        }
        console.log(+baf + +price);
        document.getElementById("total").value = +baf + +price;

    }

   
</script>
