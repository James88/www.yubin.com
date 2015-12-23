<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="top-div">
      <div class="top-div-nr">
      	   <img src="<?php echo Yii::$app->params['staticsPath']; ?>images/yubin_01.jpg" width="1170" height="204" alt=""/>
      </div>
</div>
<div class="header">
    <div class="header-top">
        <div class="f-l">
            <img src="<?php echo Yii::$app->params['staticsPath']; ?>images/yubin_04.jpg" width="296" height="84" alt=""/> 
        </div>
          <div class="f-r">
           <div class="search-panel">
                <ul class="search-panel-li clearfix">
                    <li><a   tip="fac_price" href="javascript:void(0);" class="selected">造价员</a></li>
                    <li><a   tip="gov_search" href="javascript:void(0);">建造师</a></li>
                    <li><a   tip="gov_search"  href="javascript:void(0);">八大员</a></li>
                    <li><a   tip="fac" href="javascript:void(0);">学历教育</a></li>
                   <li><a   tip="xunjia" href="javascript:void(0);">招聘信息</a></li>
                </ul>
               <div class="search-panel-input">
                  <input type="text" id="key" placeholder="请输入关键字 如“ 造价员培训 ”" class="txt-inp" /><input type="button" onclick="toSearch();" class="btn-search" value="" />
                </div>
            </div>
          </div>
    </div>
    <ul class="mainNav clearfix">
        <li><a  href="#" class="location_z select">首页</a></li>
        <li><a  href="zixun-list.html" class="location_z">报考指南</a></li>
        <li><a  href="detail（zx）.html" class="location_z">造价员培训</a></li>
        <li><a  href="wlst-list.html" target="_blank" >网络试听</a></li>
        <li><a  href="zxzx-list.html" target="_blank">资讯中心</a></li>
        <li><a  href="zhaopin-list.html" target="_blank">企业招聘</a></li>
        <li><a  href="zhaopin-list.html" target="_blank">求职简历</a></li>
        <li><a  href="xxj-list.html" target="_blank">信息价</a></li>
        <li><a  href="zixun-list.html" target="_blank">资料下载</a></li>
     <li><a  href="contact.html" target="_blank">联系我们</a></li>
    </ul>
</div>

<?= $content ?>
    
<div class="foot"> 
	<div class="foot-zt">
        <div class="foot-left f-l">
        	<div class="foot-left-top"><img src="<?php echo Yii::$app->params['staticsPath']; ?>images/foot-logo.jpg" width="144" height="63" alt=""/></div>
            <ul  class="foot-left-bottom">
            	<li><a href="about.html">关于我们</a></li>
                <li><a href="contact.html">联系我们</a></li>
                <li><a href="mianzeshengming.html">免责声明</a></li>
            </ul>
        </div>
        <div class="foot-middle f-l">
        	宇斌教育网（www.ybjypx.com）专注于建筑培训行业。依托于河南经济职业技术学院，整合业内资源，为热爱建筑行业的学员提供专业，急速的信息服务，帮助学员更有针对性的学习，同时也为学员提供最热的招聘信息，立致于实现最优质人才与最合适的企业快速无
缝对接。
        </div>
        <div class="foot-right f-l">
        	<div class="foot-right-l"><img src="<?php echo Yii::$app->params['staticsPath']; ?>images/weixin.jpg" width="121" height="156" alt=""/></div>
            <div class="foot-right-r">
            	<div class="jl-qq">宇斌交流群</div>
                <p class="jl-nr">66888889</p>
                <div class="jl-dh">商务联系方式</div>
                <p class="jl-nr">黄老师：15088888888</p>
                <p class="jl-nr">刘老师：15266666666</p>
            </div>
        </div>
    </div>
  <div class="foot-bq">
    	<p>Copyright© 2001-2010 Incorporated. All rights reserved. 豫ICP备案14000272</p>
        <p>技术支持：<a href="#">河南亿飞网络科技有限公司</a></p>
    </div>
</div>

<!-- footer end --> 
<!-- kehu start -->
<div class="kefu">
    <ul class="list-unstyled">
        <li><a href="/contact" title="更多联系方式" target="_blank" class="kefu-lx">在线客服</a></li>
        <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=976220223&site=qq&menu=yes" class="kefu-zx">在线咨询</a></li>
        <li><a href="#yy" class="kefu-wx" title="官方微信" rel="nofollow">官方微信<span class="kefu-weixin"><img src="<?php echo Yii::$app->params['staticsPath']; ?>images/kefu-weixin.jpg" width="140" height="140"></span></a></li>
        <li><a href="#top" class="kefu-top" title="回网页顶部" rel="nofollow">返回顶部</a></li>
    </ul>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
