<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Jobs */

$this->title = 'Create Jobs';
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobs-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
