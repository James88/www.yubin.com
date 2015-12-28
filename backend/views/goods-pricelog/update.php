<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\GoodsPriceLog */

$this->title = 'Update Goods Price Log: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Goods Price Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="goods-price-log-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
