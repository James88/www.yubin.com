<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2016-1-6 20:22:42
 */
$this->title = $model->title;
$this->params['breadcrumbs'][]=['label'=>$this->title];
?>
<div class="containter">
    <?= $this->render('_breadcrumbs'); ?>
    <div class="detail-zt">
        <div class="new-bt"><?= $model->title; ?></div>
        <div class="new-sj"><label class="new-sj-time"><?= date("Y-m-d",$model->created_at); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;<label class="new-sj-form">宇斌教育</label>&nbsp;&nbsp;&nbsp;&nbsp;<label class="new-sj-read"><?= $model->views; ?></label></div>
    </div>
    <div class="containter-zt">
    	<!--<div class="detail-img"></div>-->
        <div class="detail-wz">
        	<?= $model->content; ?>
        </div>
        <div class="xgread">
        	<div class="xgread-tit"><span>相关阅读</span></div>
            <ul class="xgread-zt">
            	<?php $newsList = common\models\News::find()->orderBy(['id'=>SORT_DESC])->limit(5)->all(); ?>
                <?php foreach ($newsList as $k => $v): ?>
                <li><a href="<?= Yii::$app->urlManager->createUrl(['mobile/show','id'=>$v->id]); ?>"><?= $v->title; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="clear"></div>
        
  </div>
</div>
