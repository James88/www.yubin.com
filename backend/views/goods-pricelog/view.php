<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\GoodsPriceLog */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Goods Price Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-price-log-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'goods_id',
            'year',
            'month',
            'day',
            'price',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
