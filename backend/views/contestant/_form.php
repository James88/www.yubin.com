<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contestant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contestant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intro')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'thumb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ord')->textInput() ?>

    <?= $form->field($model, 'shares')->textInput() ?>

    <?= $form->field($model, 'votes')->textInput() ?>
    
    <?= $form->field($model, 'votes_virtual')->textInput() ?>

    <?= $form->field($model, 'views')->textInput() ?>
    <?php if (!$model->isNewRecord) { ?>
        <div class="form-group">
            <?php
            foreach ($model->images as $image) {
                echo '<div style="width:150px; float: left; text-align: center">';
                echo '<a href="' . \Yii::$app->getUrlManager()->createUrl(['contestant/remove', 'id' => $image->id]) . '" title="' . Yii::t('app', 'Delete') . '" data-confirm="' . Yii::t('app', 'Are you sure you want to delete this item?') . '" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a><br>';
                if (strpos($image->thumb, 'http://') === null) {
                    $file = Yii::getAlias('@frontend/web' . $image->thumb);
                    $fileType = \yii\helpers\FileHelper::getMimeType($file);
                    $data = base64_encode(file_get_contents($file));
                    echo "<img src='data:" . $fileType . ";base64," . $data . "' width=100><br>";
                } else {
                    echo "<img src='$image->thumb' width=100><br>";
                }
                echo Yii::t('app', 'Sort Order') . ' <input style="width:50px" name="imageSort[' . $image->id . ']" value="' . $image->sort_order . '">';
                echo '</div>';
            } ?>
            <div style="clear:both"></div>
        </div>

        <div class="form-group">
            <?= \backend\widgets\image\ImageDropzone::widget([
                'name' => 'file',
                'url' => ['uploadimage'],
                'sortable' => true,
                'sortableOptions' => [
                    //'items' => '.dz-image-preview',
                ],
                //'model' => $model,
                //'attribute' => 'image',
                'htmlOptions' => [
                    //'class' => 'table table-striped files',
                    //'id' => 'previews',
                ],
                'options' => [
                    //'clickable' => ".fileinput-button",
                    'params' => ['productId' => $model->id,],
                ],
            ]); ?>
        </div>

    <?php } ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
