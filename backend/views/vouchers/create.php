<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Vouchers */

$this->title = 'Create Vouchers';
$this->params['breadcrumbs'][] = ['label' => 'Vouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vouchers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
