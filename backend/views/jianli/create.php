<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Jianli */

$this->title = 'Create Jianli';
$this->params['breadcrumbs'][] = ['label' => 'Jianlis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jianli-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
