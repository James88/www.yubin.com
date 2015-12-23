<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contestant */

$this->title = '修改参赛者: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '参赛者管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="contestant-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
