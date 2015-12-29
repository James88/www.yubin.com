<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2015-12-28 15:53:59
 */
$this->title = "网络试听";
$this->params['breadcrumbs'] = ['label'=>$this->title];
?>
<div class="container ">
	<div class="container-left f-l">
    	<?php echo $this->render('/layouts/_breadcrumbs'); ?>
        <?php foreach ($models as $k => $v): ?>
        <div class="wlst-list f-l">
            <a href="<?= Yii::$app->urlManager->createUrl(['video/show','id'=>$v->id]); ?>">
                <div class="wlst-list-sp"><img src="<?= $v->content."?vframe/jpg/offset/".$v->thumb; ?>" width="265" height="177" alt=""/></div>
                <div class="wlst-list-nr">
                  <div class="wlst-list-nr-tit"><span>
                  <input type="button" class="wlst-btn" value="网络试听">
                      </span><?= $v->title; ?></div>
                </div>
            </a> 
        </div>
        <?php endforeach; ?>

        <div class="clear"></div>
        <?php echo $this->render('/layouts/_pagination',['pagination'=>$pagination]); ?>
     </div>
     <div class="container-right f-r">
    	<div class="kbxx-list">
        	<div class="kbxx-list-tit lm-tb"><span><a href="#">更多</a></span>开班信息</div>	
            <div class="kbxx-list-img"><img src="images/kbxx.gif" width="345" height="103" alt=""/></div>
            <ul class="kbxx-list-nr">
            	<li><a href="#">土建实训第三期6月8号开班了</a></li> 
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
        </ul>
      </div>
       <div class="zxzp-list">
        		<div class="zxqz-tit lm-tb"><span><a href="#">更多</a></span>最新求职</div>
        <ul class="zxzp-nr">
        	 <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>    
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[求职]</label>
       	    郑某
       	    <label class="zx-m-f-l">应聘</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>
            
        </ul>	
        </div>
     </div>
     <div class="clear"></div>
</div>
