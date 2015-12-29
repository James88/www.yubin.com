<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2015-12-28 16:01:14
 */
$this->registerJsFile("@web/statics/ckplayer/ckplayer.js");
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label'=>'网络试听','url'=>['video/index']];
$this->params['breadcrumbs'][] = ['label'=>$this->title];


?>
<div class="container ">
	<div class="container-left f-l">
    	<?php echo $this->render('/layouts/_breadcrumbs'); ?>
      <div class="detail-nr m-t-20">
          <div class="xq-bt"><?= $model->title; ?></div>
          <div class="time"><span>时间:<?= common\components\Utils::dateFormat($model->created_at,5); ?></span><span>来源：宇斌教育</span><span>阅读数：<?= $model->views; ?>人</span></div>
            <div class="st-nr">
            	<div class="st-video" id="video">
                    
                </div>
            </div>

           <script type="text/javascript" src="http://yandex.st/swfobject/2.2/swfobject.min.js"></script>
    <script type="text/javascript">
        var flashvars = {
            src: "http://movie.ks.js.cn/flv/other/1_0.flv"
        };
        var params = {
            allowFullScreen: true
            , allowScriptAccess: "always"
            , bgcolor: "#000000"
        };
        var attrs = {
            name: "player"
        };

        swfobject.embedSWF("GrindPlayer.swf", "player", "854", "480", "10.2", null, flashvars, params, attrs);
    </script>
    <div id="player"></div>
          
            <!--<div class="st-video-key">关键词：<span>宇斌教育造价员培训 </span><span>基础课程试听</span></div>-->
            <div class="xian m-t-20"></div>
<!--         <div class="zp-detail"><label class="fany">上一篇：</label><a href="#">造价专业有前途吗</a></div>
        <div class="zp-detail"><label class="fany">下一篇：</label><a href="#">造价专业有前途吗</a></div> -->
<div class="fhlb"><a href="<?= Yii::$app->urlManager->createUrl(['video/index']); ?>">返回列表</a></div> 
      </div>
        <div class="clear"></div>
        
     </div>
     <div class="container-right f-r">
    	 <div class="rmzt">
            	<div class="rmzt-tit lm-tb"><span><a href="#">更多</a></span>资料下载</div>	
            <div><img src="images/yubin_58.jpg" width="286" height="101" alt=""/></div>
            <ul class="kbxx-nr">
            	<li><a href="#">土建实训第三期6月8号开班了</a></li> 
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
                <li><a href="#">土建实训第三期6月8号开班了</a></li>
        </ul>	
            </div>  
         <div class="rmzt">
            	<div class="rmzt-tit lm-tb"><span><a href="#">更多</a></span>报考指南</div>	
           <div><img src="images/yubin_55.jpg" width="280" height="104" alt=""/></div>
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
<?php 
$videoUrl = $model->content;
//$videoUrl = "http://movie.ks.js.cn/flv/other/1_0.flv";
$js = <<< JS
  
 var flashvars={
		f:'{$videoUrl}',
		c:0,
		b:1
		};
	var video=['{$videoUrl}'];
	CKobject.embed('/statics/ckplayer/ckplayer.swf','video','ckplayer_video','600','400',false,flashvars,video)	
	function closelights(){//关灯
		alert(' 本演示不支持开关灯');
	}
	function openlights(){//开灯
		alert(' 本演示不支持开关灯');
	}

        
JS;
$this->registerJs($js);

?>