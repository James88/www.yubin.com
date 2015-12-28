<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Jianli */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jianlis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jianli-view">

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
            'xingming',
            'xingbie',
            'nianling',
            'xueli',
            'xiangguanzhengshu',
            'yingpingzhiwei',
            'qiwangxinzi',
            'gerenjianjie',
            'qitayaoqiu',
            'lianxidianhua',
            'created_at',
            'updated_at',
            'end_at',
            'views',
            'author',
//            'jobtype',
        ],
    ]) ?>

</div>
