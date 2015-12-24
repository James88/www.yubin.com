<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2015-12-23 19:21:01
 */
use common\models\Category;

$this->title = "列表_".Category::getCategoryName($cid);
$breadcrumbs = Category::getBreadcrumbs($cid, "news/index", "cid");
$this->params['breadcrumbs'] = $breadcrumbs;
//var_dump($breadcrumbs);die;
?>
<div class="container ">
	<div class="container-left f-l">
  
            
            
        <?php echo $this->render('/layouts/_breadcrumbs'); ?>

        <ul class="zxlb-list">
            <?php foreach ($models as $k => $v): ?>
            <li><a href="<?= Yii::$app->urlManager->createUrl(['news/show','id'=>$v->id]); ?>"><span><?= \common\components\Utils::dateFormat($v->created_at, 0); ?></span><?= $v->title; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <div class="clear"></div>
        <?php echo $this->render('/layouts/_pagination',['pagination'=>$pagination]); ?>	
     </div>
     <div class="container-right f-r">
    	<div class="kbxx-list-img"><img src="images/list-ad01.jpg" width="295" height="155" alt=""></div>
        <div class="zxzp-list">
        		<div class="zxqz-tit lm-tb"><span><a href="#">更多</a></span>最新招聘</div>
        <ul class="zxzp-nr">
        	 <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>    
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某

       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl">[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            
        </ul>	
        </div>
     </div>
     <div class="clear"></div>
</div>

