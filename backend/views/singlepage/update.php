<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Singlepage */

$this->title = 'Update Singlepage: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Singlepages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="singlepage-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
