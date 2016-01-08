<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use frontend\assets\MobileAsset;

MobileAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?>_<?= $this->params['siteconfig']['sitename'] ?></title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="header">
    <div class="header-zt"><span><a href="<?= Yii::$app->urlManager->createUrl(['mobile/index']); ?>"><img src="/statics/mobile/images/iconfont-shouye.png" alt=""/></a></span><a href="<?= Yii::$app->urlManager->createUrl(['mobile/index']); ?>"><img src="/statics/mobile/images/logo.jpg"  alt=""/></a></div>
   <!--首页按钮-->
   <!--<div id="webHeaderBox" class="webHeaderBox  "  >
	  <div class='navButton' id='navButton'>
        <div class='menuNav'><a href="#">首页</a> </div>
      </div>
      <div id='headerWhiteBg' class='headerSiteMaskWhiteBg'></div>
  </div>-->
</div>
    
<?= $content ?>
    
<div id="webFooterBox" class="webFooterBox  ">
    <div id='webFooter' class='webFooter'>
        <div id='footer'  class='footer'>
            <div class='bottomdiv'>
                <div class='bottom'>
                    <div class='backtop' onclick='Mobi.scrollToTop("webContainerBox")'><a href="javascript:scroll(0,0)" >top<b></b></a></div>
                </div>
            </div>
            <div class='technical'>
                <div class='technicalSupport'><font face='Arial'>&copy;</font>2016&nbsp;&nbsp;&nbsp;宇斌教育&nbsp;&nbsp;&nbsp;版权所有</div>
                <div class='technicalSupport'>技术支持：<a href='http://www.yifei100.com/'  target='_blank' hidefocus='true'>亿飞网络</a><a class='PcVer' href='<?= Yii::$app->urlManager->createUrl(['site/index','adapter'=>'pc']); ?>'  target='_blank' hidefocus='true'>电脑版</a></div>
            </div>
        </div>
    </div>
            <div id='webCustomerServiceBox' class='webCustomerServiceBox'>
              <div class='customerServiceDiv' id='customerServiceDiv'>
           	    <div class="ddh f-l "> 
                	<a href="javascript:void(0);">打电话</a>
                	<i class="iconfont">&#x3624;</i>
                 </div>
                <div class="reveal-modal-bg"></div>
 <div class="pop-up">
			<div class="login">
				<div class="login-title">与宇斌教育沟通<span><a href="javascript:void(0);" class="close-login">关闭</a></span></div>
				<div class="login-content">
				  <p class="boda">您要拨打的电话号码为</p>
                  <p class="haoma"><a href="tel:0371-63621259">0371-63621259</a></p>

                  <button value="现在拨打" class="xzbd"><a href="tel:0371-63621259">现在拨打</a></button>

				</div>
		
		</div>
	</div>
                  <div class="line f-l">|</div>
                 <div class="yb-qq f-l "> <a href="http://wpa.qq.com/msgrd?v=3&uin=976220223&site=qq&menu=yes">QQ&nbsp;<img src="/statics/mobile/images/iconfont-qq.png"alt=""/></a></div>
    	         <div class="line f-l">|</div>
                 <div class="ybm f-l "> <a href="<?= Yii::$app->urlManager->createUrl(['mobile/yybm']); ?>">预报名</a><i class="iconfont">&#xe751;</i></div>
              </div>
            </div>
</div>
<div style="display: none;"><?php echo $this->params['siteconfig']['tongji']; ?></div>
<?php $this->endBody() ?>
</body>
</html>
<?php 
$js = <<< JS
var _htmlFontSize = (function(){
    var clientWidth = document.documentElement ? document.documentElement.clientWidth : document.body.clientWidth;
    if(clientWidth > 640) clientWidth = 640;
    document.documentElement.style.fontSize = clientWidth * 1/16+"px";
    return clientWidth * 1/16;
})();
$(function () {
    H_login = {};
    H_login.openLogin = function(){
        $('.ddh a').click(function(){
            $('.login').show();
            $('.reveal-modal-bg').show();
			$('.menuNav').hide();
        });
    };
    H_login.closeLogin = function(){
        $('.close-login').click(function(){
            $('.login').hide();
            $('.reveal-modal-bg').hide();
			$('.menuNav').show();
        });
    };
    
    
    H_login.run = function () {
        this.closeLogin();
        this.openLogin();
        this.loginForm();
    };
    H_login.run();
});

JS;
$this->registerJs($js);
?>
<?php $this->endPage() ?>