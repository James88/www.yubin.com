<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kaoshi */

$this->title = 'Update Kaoshi: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Kaoshis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kaoshi-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
