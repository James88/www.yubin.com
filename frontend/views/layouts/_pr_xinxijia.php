<?php
/*
 * @author Lmy
 * QQ:6232967
 * Create at 2015-12-30 17:47:31
 */
?>
<div class="rmzt">
    <div class="rmzt-tit lm-tb"><span><a href="<?= Yii::$app->urlManager->createUrl(['news/index','cid'=>8]); ?>">更多</a></span>报考指南</div>	
    <div><img src="<?php echo Yii::$app->params['staticsPath']; ?>images/yubin_55.jpg" width="280" height="104" alt="" /></div>
    <ul class="kbxx-nr">
        <?php $goods = \common\models\Goods::find()->orderBy(['updated_at'=>SORT_DESC])->limit(11)->all(); ?>
        <?php foreach ($goods as $k => $v): ?>
        <li><a href="<?= Yii::$app->urlManager->createUrl(['price/index','key'=>$v->name]); ?>"><?= date("Y",$v->updated_at); ?>年<?= date("m",$v->updated_at); ?>月<?= $v->name; ?>最新报价</a></li>
        <?php endforeach; ?>
    </ul>	
</div>