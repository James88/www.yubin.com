<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Contestant */

$this->title = '添加参赛者';
$this->params['breadcrumbs'][] = ['label' => '参赛者管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contestant-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
