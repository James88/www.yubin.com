<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Goods */

$this->title = 'Update Goods: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="goods-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
