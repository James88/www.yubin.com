<?php
/*
 * @author Lmy
 * QQ:6232967
 * Create at 2015-12-28 13:01:26
 */
$this->title = "师生风采";
$this->params['breadcrumbs'] = ['label'=>'师生风采'];
?>
<div class="container ">
	<div class="container-left f-l">
    	<?php echo $this->render('/layouts/_breadcrumbs'); ?>
        <ul class="ssfc">
            <?php foreach ($models as $k => $v): ?>           
            <li><a href="<?= Yii::$app->urlManager->createUrl(['album/show','id'=>$v->id]); ?>"><img src="<?= $v->thumb; ?>"></a></li>
            <?php endforeach; ?>
            
        </ul>
        <div class="clear"></div>
        <?php echo $this->render('/layouts/_pagination',['pagination'=>$pagination]); ?>
    </div>
    <div class="container-right f-r">
    	<div class="kbxx-list">
        	<div class="kbxx-list-tit lm-tb"><span><a href="#">更多</a></span>开班信息</div>	
            <div class="kbxx-list-img"><img src="images/kbxx.gif" width="345" height="103" alt=""></div>
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
      <div class="rmzt">
            	<div class="rmzt-tit lm-tb"><span><a href="#">更多</a></span>报考指南</div>	
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
