<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GoodsPriceLog */

$this->title = 'Create Goods Price Log';
$this->params['breadcrumbs'][] = ['label' => 'Goods Price Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-price-log-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
