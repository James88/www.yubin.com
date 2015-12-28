<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2015-12-28 16:01:14
 */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label'=>'资料下载','url'=>['file-download/index']];
$this->params['breadcrumbs'][] = ['label'=>$this->title];


?>       
<div class="container ">
	<div class="container-left f-l">
    	<?php echo $this->render('/layouts/_breadcrumbs'); ?>
        <div class="detail-nr m-t-20">
            <div class="xq-bt"><?= $model->title; ?></div>
            <div class="time"><span>时间: <?= common\components\Utils::dateFormat($model->created_at, 5); ?></span><span>来源：宇斌教育</span><span>阅读数：<?= $model->views; ?>人</span></div>
            <div class="nr-hg">
            	<?= $model->filepath; ?>
            </div>
        </div>
     </div>
     <div class="container-right f-r">
    	<div class="kbxx-list-img"><img src="images/list-ad01.jpg" width="295" height="155" alt=""/></div>
          <div class="zxzp-list">
        		<div class="zxqz-tit lm-tb"><span><a href="#">更多</a></span>最新求职</div>
        <ul class="zxzp-nr">
        	 <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	    郑州宇
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>    
             <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	   建筑分队
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>  
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	    建筑分队
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>  
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	    第二建筑
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>  
             <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	    郑州宇
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>  
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	    郑州建队
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>  
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	    第二建筑
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>  
           <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	  建筑分队
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>  
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	   宇斌造价
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>  
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	    郑州宇斌
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>  
            <li><a href="#"><span>2016-02-06</span>
        	    <label class="zx-fl" >[招聘]</label>
       	    宇斌造
       	    <label class="zx-m-f-l">招</label>
        	    <label class="zx-ys">造价员</label>
        	</a></li>  
            
        </ul>	
        </div>
     </div>
     <div class="clear"></div>
</div>