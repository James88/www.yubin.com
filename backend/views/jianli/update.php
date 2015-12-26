<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Jianli */

$this->title = 'Update Jianli: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jianlis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jianli-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
