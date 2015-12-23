<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContestantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '参赛者管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contestant-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增参赛者', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'intro:ntext',
            'thumb',
            'ord',
            // 'shares',
            // 'votes',
            // 'views',
            // 'created_by',
            // 'updated_by',
            // 'updated_at',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
