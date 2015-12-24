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
    	<div class="kbxx-list-img"><img src="images/list-ad01.jpg" width="295" height="155" alt=""></div>
         <div class="rmzt">
            	<div class="rmzt-tit lm-tb"><span><a href="#">更多</a></span>热门专题</div>	
            <div><img src="images/yubin_55.jpg" width="280" height="104" alt=""></div>
            <ul class="kbxx-nr">
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
     </div>
     <div class="clear"></div>
</div>

