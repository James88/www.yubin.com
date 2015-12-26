<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FileDownload */

$this->title = 'Update File Download: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'File Downloads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="file-download-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
