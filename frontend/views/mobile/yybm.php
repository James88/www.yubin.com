<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2016-1-6 20:15:53
 */
use yii\widgets\ActiveForm;

$this->title = "预约报名";
$this->params['breadcrumbs'][]=['label'=>$this->title];
?>
<div class="containter">
	<?= $this->render('_breadcrumbs'); ?>
    <div class="yybm-bt">填写信息<span>&nbsp;</span></div>
    <div class="containter-zt">
    	<?php $form = ActiveForm::begin(); ?>
         <div class="yybm-bg">
            <div class="yybm-bm"><label>姓名：</label>
                <?= yii\helpers\Html::activeTextInput($model, "name",['placeholder'=>""]); ?>
            </div>
            <div class="yybm-bm"><label>电话：</label>
                <?= yii\helpers\Html::activeTextInput($model, "phone",['placeholder'=>""]); ?>
            </div>
            <div class="yybm-bm"><label>专业：</label>
                <?= yii\helpers\Html::activeTextInput($model, "type",['placeholder'=>""]); ?>
            </div>
            <div class="yybm-bm-bz"><label>备注：</label>
                <?= yii\helpers\Html::activeTextArea($model, "content",['class'=>'yybm-bz','placeholder'=>""]); ?>

            </div>
            <?= yii\helpers\Html::errorSummary($model); ?>
            <div class="yybm-an"><span><input type="submit" class="yybm-tj" value="立即报名"></span><span><input type="reset" class="yybm-cz" value="重置"></span></div>
        </div>
        <?php ActiveForm::end(); ?>
        <div class="clear"></div>
     </div>
</div>
