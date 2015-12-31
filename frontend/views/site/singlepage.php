<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2015-12-24 13:16:58
 */
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label'=>$this->title]
?>
<div class="container ">
	<div class="container-left f-l">
        <?php echo $this->render('/layouts/_breadcrumbs'); ?>
        <div class="about-nr m-t-20">
            <?= $model->content; ?>
        </div>
        <div class="clear"></div>
    </div>
    <div class="container-right f-r">
        <?php $action =  Yii::$app->controller->action->id; ?>
       <?php echo $this->render('/layouts/_pr_kaibanxinxi'); ?>
       <?php echo $this->render('/layouts/_pr_baokaozhinan'); ?>
    </div>
    <div class="clear"></div>
</div>

