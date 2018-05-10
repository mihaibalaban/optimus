<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VouchersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vouchers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vouchers-index">
    <div class='row'>
        <?php
        foreach ($vouchers as $v) {

            echo "

<div class='col-lg-4'>
        <div class=\"card-example\">
    <div class=\"card card-inverse\" style=\"background: #333; border-radius: 10px; border-color: #333\">
        <div class=\"card-block\">
            <h3 class=\"card-title\" style=\"color:white; margin:20px; padding-top: 10px\">
                Voucher
            </h3>
            <p class=\"card-text\" style=\"color:white; margin:20px\">
               " . $v['voucher'] . "
            </p>
            <div style=' margin:20px; padding-bottom: 20px'>
            " . Html::a('Open', ['vouchers/update?id=' . $v['id']], ['class' => 'btn btn-lg btn-primary modalButton']) . "
        </div>
        </div>
    </div>
    </div>
</div>";
        }
        ?>
    </div>

</div>
<script>
    $(function () {
        // changed id to class
        $('.modalButton').click(function () {
            $.get($(this).attr('href'), function (data) {
                $('#modal').modal('show').find('#modalContent').html(data)
            });
            return false;
        });
    });
</script>
<?php
Modal::begin([
        'id' => 'modal',
    'size' => 'modal-lg',
]);
echo "<div id='modalContent'></div>";
Modal::end();
?>


<style>
    .card-example {
    max-width: 350px;
    margin: 0 auto;
    margin-top: 15px;
    margin-bottom: 10px;
    }

    .card-example .card-header {
    font-weight: 900;
    color: #ffffff;
    background: #20bc4c;
    }
</style>