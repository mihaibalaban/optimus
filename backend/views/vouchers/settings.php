<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vouchers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vouchers-form">

    <?php
    foreach ($model as $a) {
        $form = ActiveForm::begin([
            'action' => Url::toRoute('vouchers/settings'),
            'options' => ['id' => 'dynamic-settings']
        ]); ?>

        <div class="row">
            <div class="col-lg-6">
                <?php

                if ($a['idAttribute']['parrent_id'] == 1) {

                    echo $form->field($a, 'value')->textInput();

                    echo $form->field($a, 'from')->widget(DatePicker::className(), [
                        'dateFormat' => 'yyyy-MM-dd',
                    ]);

                    echo $form->field($a, 'to')->widget(DatePicker::className(), [
                        'dateFormat' => 'yyyy-MM-dd',
                    ]);
                }

                ?>
            </div>
            <div class="col-lg-6">

            </div>
        </div>
    <?php }
    ActiveForm::end(); ?>

</div>

<!--<script>-->
<!---->
<!--    var baf, price;-->
<!--    changeBaff(document.getElementById('route').value);-->
<!---->
<!--    function changeBaff(value) {-->
<!--        var route = value;-->
<!--        if (route == 'CA-DO') {-->
<!--            baf = document.getElementById("baf").value = 3.09;-->
<!--        } else if (route == 'DO-CA') {-->
<!--            baf = document.getElementById("baf").value = 3.11;-->
<!--        }-->
<!---->
<!--        document.getElementById("total").value = baf + price;-->
<!--    }-->
<!---->
<!--    changePrice(document.getElementById('length').value);-->
<!---->
<!--    function changePrice(value) {-->
<!--        var length = value;-->
<!--        if (length == 7) {-->
<!--            price = document.getElementById("price").value = 91.7;-->
<!--        } else if (length == 9) {-->
<!--            price = document.getElementById("price").value = 145.4;-->
<!--        } else if (length == 10) {-->
<!--            price = document.getElementById("price").value = 145.4;-->
<!--        } else if (length == 12) {-->
<!--            price = document.getElementById("price").value = 168.4;-->
<!--        } else if (length == 17) {-->
<!--            price = document.getElementById("price").value = 168.4;-->
<!--        } else if (length == 19) {-->
<!--            price = document.getElementById("price").value = 320;-->
<!--        } else {-->
<!--            price = document.getElementById("price").value = value;-->
<!--        }-->
<!--        console.log(+baf + +price);-->
<!--        document.getElementById("total").value = +baf + +price;-->
<!---->
<!--    }-->
<!---->
<!---->
<!--</script>-->
