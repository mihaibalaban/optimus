<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VouchersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vouchers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vouchers-index">

    <?= Html::a("Generate voucher", ['vouchers/generate-voucher'], ['class' => 'btn btn-lg btn-primary']) ?>
    <?= Html::button('Multiple generator - beta version', ['id' => 'modelButton', 'value' => \yii\helpers\Url::to(['list/create']), 'class' => 'btn btn-lg btn-danger']) ?>
    <h1><?= Html::encode($this->title) ?></h1>


    <?= Html::a('Export Vouchers', ['export'], ['class' => 'btn btn-success']) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'owner',
            'voucher',
            'date',
            'truck',
            'truck_length',
            'route',
            'reference',
            'price',
            'baf',
            'invoice',
            ['attribute' => 'total',
                'value' => function ($model) {
                    return $model->price + $model->baf;
                }
            ],
//             'temporization',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php

    Modal::begin([
        'header' => '<h4>Multiple generator</h4>',
        'id' => 'model',
        'size' => 'model-lg',
    ]);

    echo "<div id='modelContent'>
    <form action=\"multiple\">
        How much do you need:<br>
        <input type=\"number\" name=\"howMuch\" value= 1>
        <br>
        <input class='btn btn-sm btn-success' style='margin-top: 10px' type=\"submit\" value=\"Go for it\">
    </form>

</div>";

    Modal::end();

    ?>

</div>
<script>
    $(function () {
        $('#modelButton').click(function () {
            $('.modal').modal('show')
                .find('#modelContent')
                .load($(this).attr('value'));
        });
    });
</script>
