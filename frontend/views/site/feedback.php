<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2016-1-8 17:56:05
 */
use yii\widgets\ActiveForm;

$this->title = "在线报名";
$this->params['breadcrumbs'][] = ['label'=>$this->title]
?>
<div class="container ">
	<div class="container-left f-l">
    	<?php echo $this->render('/layouts/_breadcrumbs'); ?>     
	     <div class="about-nr m-t-20">
        	<div class="yybmpc-bt">填写信息<span>&nbsp;</span></div>
          
            <?php $form = ActiveForm::begin(); ?>
            <div class="yybmpc-bg">
               <div class="yybmpc-bm"><label>姓名：</label>
                   <?= yii\helpers\Html::activeTextInput($model, "name",['placeholder'=>""]); ?>
               </div>
               <div class="yybmpc-bm"><label>电话：</label>
                   <?= yii\helpers\Html::activeTextInput($model, "phone",['placeholder'=>""]); ?>
               </div>
               <div class="yybmpc-bm"><label>专业：</label>
                   <?= yii\helpers\Html::activeTextInput($model, "type",['placeholder'=>""]); ?>
               </div>
               <div class="yybmpc-bm-bz"><label>备注：</label>
                   <?= yii\helpers\Html::activeTextArea($model, "content",['class'=>'yybmpc-bz','placeholder'=>""]); ?>

               </div>
               <?= yii\helpers\Html::errorSummary($model); ?>
               <div class="yybmpc-an"><span><input type="submit" class="yybmpc-tj" value="立即报名"></span><span><input type="reset" class="yybmpc-cz" value="重置"></span></div>
            </div>
            <?php ActiveForm::end(); ?>

            <div class="clear"></div>
        </div>
    </div>

    <div class="container-right f-r">
    	<?php 
            $action =  Yii::$app->controller->action->id; 
            if($action == 'about'){
                $fileArr[] = "/layouts/_pr_zhentifabu";
                $fileArr[] = "/layouts/_pr_baokaozhinan";
            }else if($action == 'contact'){
                $fileArr[] = "/layouts/_pr_kaibanxinxi";
                $fileArr[] = "/layouts/_pr_xinxijia";
            }else if($action == 'mianze'){
                $fileArr[] = "/layouts/_pr_zhentifabu";
                $fileArr[] = "/layouts/_pr_remenzhuanti";
            }else{
                $fileArr[] = "/layouts/_pr_kaibanxinxi";
                $fileArr[] = "/layouts/_pr_baokaozhinan";
            }
            foreach($fileArr as $file){
                echo $this->render($file);
            }
        ?> 
    </div>
    <div class="clear"></div>
</div>
