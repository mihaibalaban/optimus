<?php

use kartik\file\FileInput;
use yii\bootstrap\ActiveForm;
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
    <div style="margin-bottom: 20px">
        <?= Html::button('Multiple generator', ['id' => 'modelButton', 'value' => \yii\helpers\Url::to(['list/create']), 'class' => 'btn btn-lg btn-primary']) ?>
    </div>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'cvFile')->label(false)->widget(FileInput::classname(), [
        'options' => ['multiple' => false],
        'language' => 'en',
        'pluginOptions' => [
            'initialCaption' => "Select invoices file",
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
    <?php
    if (sizeof($vouchersWithProblems) > 0) {
        ?>
        <h3>Save this vouchers values and verify them manually: </h3>

        <?php
    }
    ?>
    <?php
    foreach ($vouchersWithProblems as $vp) {
        ?>
        <p>
            <?= $vp['voucher']; ?>
        </p>

    <?php }
    ?>

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
            'drivers',
            'goods',
            'price',
            'baf',
            'total',
            'invoice',

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
