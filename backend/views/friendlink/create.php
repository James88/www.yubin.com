<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Friendlink */

$this->title = 'Create Friendlink';
$this->params['breadcrumbs'][] = ['label' => 'Friendlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="friendlink-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
