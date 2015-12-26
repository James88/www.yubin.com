<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Jobs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'zhiweiming')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gongzuodiqu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zhiweixinzi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'xueliyaoqiu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zhaopinrenshu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gongzuoxingzhi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'xingbieyaoqiu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gongzuojingyan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jingzhengyoushi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zhiweimiaoshu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
