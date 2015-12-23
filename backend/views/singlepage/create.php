<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Singlepage */

$this->title = 'Create Singlepage';
$this->params['breadcrumbs'][] = ['label' => 'Singlepages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="singlepage-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
