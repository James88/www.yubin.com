<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2016-1-6 20:22:52
 */
use common\models\Category;
use yii\widgets\ListView;
$this->title = "列表_".Category::getCategoryName($id);
$breadcrumbs = Category::getBreadcrumbs($id, "mobile/list", "id");
$this->params['breadcrumbs'] = $breadcrumbs;
?>
<div class="containter">
	<?= $this->render('_breadcrumbs'); ?>
    <div class="containter-zt">
    	<ul class="new-list">
            <?php 
                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemOptions' => ['class' => 'item'],
                    'itemView' => '_listview_news',
                    'pager' => [
                        'class' => \kop\y2sp\ScrollPager::className(),
                        'noneLeftTemplate'=>'<div class="ias-noneleft" style="clear:both;text-align: center;">{text}</div>',
                        'triggerTemplate'=>'<div class="ias-trigger" style="clear:both;text-align: center; cursor: pointer;"><a>{text}</a></div>',
                        'negativeMargin' => '10',
                        'triggerOffset'=>50,
                        //'IASTriggerExtension'=>['offset'=>3]
                    ],
                    'summary'=>'',
                ]);
            ?>
        </ul>
        <div class="clear"></div>
        <!--<div class="seemore"><a href="#">查看更多</a></div>-->
     </div>
</div>
