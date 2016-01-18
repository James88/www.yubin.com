<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2016-1-6 20:13:09
 */
$this->title = "培训项目";
$this->params['breadcrumbs'][]=['label'=>$this->title];
?>
<div class="containter">
	<?= $this->render('_breadcrumbs'); ?>
    <div class="containter-xm-zt">
   	  <dl class="pxxm">
        	<dt>热门培训</dt>
            <?php 
            $bigCate = \common\models\Category::find()->where(['is_nav'=>\common\models\YesNo::YES])->orderBy(['sort_order'=>SORT_ASC])->all();
            ?>
            <?php foreach ($bigCate as $k => $v): ?>
            <dd><a href="<?= Yii::$app->urlManager->createUrl(['mobile/list','id'=>$v->id]); ?>"><?= $v->name; ?></a></dd>
            <?php endforeach; ?>
            
        </dl>
        <div class="clear"></div>
     </div>
</div>

