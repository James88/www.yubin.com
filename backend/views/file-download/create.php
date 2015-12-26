<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FileDownload */

$this->title = 'Create File Download';
$this->params['breadcrumbs'][] = ['label' => 'File Downloads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-download-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
