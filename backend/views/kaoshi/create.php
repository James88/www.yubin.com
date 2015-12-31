<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Kaoshi */

$this->title = 'Create Kaoshi';
$this->params['breadcrumbs'][] = ['label' => 'Kaoshis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kaoshi-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
