<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contestant */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '参赛者管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contestant-view">

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
            'name',
            'intro:ntext',
            'thumb',
            'ord',
            'shares',
            'votes',
            'views',
            'created_by',
            'updated_by',
            'updated_at',
            'created_at',
        ],
    ]) ?>

</div>
