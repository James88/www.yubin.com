<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\JobsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobs-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'company_id',
            'zhiweiming',
            'gongzuodiqu',
            'zhiweixinzi',
            // 'xueliyaoqiu',
            // 'zhaopinrenshu',
            // 'gongzuoxingzhi',
            // 'xingbieyaoqiu',
            // 'gongzuojingyan',
            // 'jingzhengyoushi',
            // 'zhiweimiaoshu:ntext',
            // 'create_at',
            // 'updated_at',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
