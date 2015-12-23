<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Friendlink */

$this->title = 'Update Friendlink: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Friendlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="friendlink-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
