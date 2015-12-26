<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Jobs */

$this->title = 'Update Jobs: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jobs-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
