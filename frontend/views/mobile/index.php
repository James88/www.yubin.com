<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2016-1-4 15:03:39
 */
$this->registerCssFile('@web/statics/mobile/css/index.css',['depends'=>['frontend\assets\MobileAsset']]);
$this->registerJsFile('@web/statics/mobile/js/banner_20151010.min.js',['depends'=>['frontend\assets\MobileAsset']]);
$this->registerJsFile('@web/statics/mobile/js/touch-20140518.min.js',['depends'=>['frontend\assets\MobileAsset']]);
$this->title="移动版首页";
?>
<div class="containter">
<!--banner-->
<div class="banner-view">
		<div class="sliderwrap" style="-webkit-transform: translateZ(0px);">
			<ul style="-webkit-transform: translate3d(-0px, 0px, 0px); -webkit-backface-visibility: hidden; transition: 0ms; -webkit-transition: 0ms;" id="banner_list">
				<?php foreach ($slider as $k => $v): ?>
                <li data-index="<?= $k; ?>"><a href="<?= $v->url; ?>"><img src="<?= $v->thumb; ?>" height="100%"></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="indicator" id="banner">
            <?php foreach ($slider as $k => $v): ?>
			<span class="cur" data-index=<?= $k; ?>><?= $k+1; ?></span>
            <?php endforeach; ?>
		</div>
</div>

<!--主体导航-->
  <div id="webContainerBox" class="webContainerBox">
	<div id="webModuleContainer" class="webModuleContainer">
		<div id='module307' _headerHiden='1' class='form Handle template1000 formStyle31 moduleStyle13' _autoHeight='1'>
			<div class='formMiddle formMiddle307'>
            	<div class='middleLeft middleLeft307'></div>
					<div class='middleCenter middleCenter307'>
						<div class='formMiddleContent formMiddleContent307 moduleContent'>
                        	<div class='cubeNavigationArea cubeNavigationArea13' value='13' id='cubeNavigation307'>
								<div class='cubeLink cubeLink1 ' id='cubeNavigation307_cubeLink1' linkid='1' >
                                    <a class='cubeLink_a ' href="<?= Yii::$app->urlManager->createUrl(['mobile/page','id'=>4]); ?>" target='_self' id='cubeLink_a1_cubeNav307' >
                                    <div class='cubeLink_bg'></div><div class="cubeLink_ico icon-cube iconfont">&#xe62a;</div>
                                    <div class='cubeLink_text g_link'><div class='cubeLink_text_p '>造价员培训<p class='cubeLink_subText_p'></p>
                                    </div></div></a>
                                 </div>
                                <div class='cubeLink cubeLink2 ' id='cubeNavigation307_cubeLink2' linkid='2' ><a class='cubeLink_a ' href="new-detail.html"  target='_self' id='cubeLink_a2_cubeNav307' >
                                    <div class='cubeLink_bg'></div><div class="cubeLink_ico icon-cube iconfont">&#xe607;</div>
                                    <div class='cubeLink_text g_link'><div class='cubeLink_text_p '>造价师培训<p class='cubeLink_subText_p'></p>
                                    </div></div></a>
                                </div>
                                <div class='cubeLink cubeLink3 ' id='cubeNavigation307_cubeLink3' linkid='3' ><a class='cubeLink_a ' href="new-detail.html"  target='_self' id='cubeLink_a3_cubeNav307' >
                                    <div class='cubeLink_bg'></div><div class="cubeLink_ico icon-cube iconfont">&#xe60d;</div>
                                    <div class='cubeLink_text g_link'><div class='cubeLink_text_p '>预算业务<p class='cubeLink_subText_p'></p>
                                    </div></div></a>
                               </div>
                                <div class='cubeLink cubeLink4 ' id='cubeNavigation307_cubeLink4' linkid='4' ><a class='cubeLink_a '  href="<?= Yii::$app->urlManager->createUrl(['mobile/list','id'=>6]); ?>"  target='_self' id='cubeLink_a4_cubeNav307' >
                                    <div class='cubeLink_bg'></div><div class="cubeLink_ico icon-cube iconfont">&#xe679;</div>
                                    <div class='cubeLink_text g_link'><div class='cubeLink_text_p '>开班信息<p class='cubeLink_subText_p'></p>
                                    </div></div></a>
                               </div>
                               <div class='cubeLink cubeLink5 ' id='cubeNavigation307_cubeLink5' linkid='5' ><a class='cubeLink_a ' href="new-list.html"  target='_self' id='cubeLink_a5_cubeNav307' >
                                    <div class='cubeLink_bg'></div><div class="cubeLink_ico icon-cube iconfont">&#xe63c;</div>
                                    <div class='cubeLink_text g_link'><div class='cubeLink_text_p '>报考指南<p class='cubeLink_subText_p'></p>
                                    </div></div></a>
                               </div>
                               <div class='cubeLink cubeLink6 ' id='cubeNavigation307_cubeLink6' linkid='6' ><a class='cubeLink_a ' href="new-list.html" style='cursor:default;'  id='cubeLink_a6_cubeNav307' >
                                    <div class='cubeLink_bg'></div><div class="cubeLink_ico icon-cube iconfont">&#xe603;</div>
                                    <div class='cubeLink_text g_link'><div class='cubeLink_text_p '>学历招生<p class='cubeLink_subText_p'></p>
                                    </div></div></a>
                               </div>
                                <div class='cubeLink cubeLink7 ' id='cubeNavigation307_cubeLink7' linkid='7' ><a class='cubeLink_a ' href="<?= Yii::$app->urlManager->createUrl(['mobile/pxxm']); ?>" style='cursor:default;'  id='cubeLink_a7_cubeNav307' >
                                    <div class='cubeLink_bg'></div><div class="cubeLink_ico icon-cube iconfont">&#xe64f;</div>
                                    <div class='cubeLink_text g_link'><div class='cubeLink_text_p '>项目培训<p class='cubeLink_subText_p'></p>
                                    </div></div></a>
                               </div>
                                <div class='cubeLink cubeLink8 ' id='cubeNavigation307_cubeLink8' linkid='8' ><a class='cubeLink_a ' href="<?= Yii::$app->urlManager->createUrl(['mobile/contact']); ?>" style='cursor:default;'  id='cubeLink_a8_cubeNav307' >
                                    <div class='cubeLink_bg'></div><div class="cubeLink_ico icon-cube iconfont">&#x3624;</div>
                                    <div class='cubeLink_text g_link'><div class='cubeLink_text_p '>联系我们<p class='cubeLink_subText_p'></p>
                                    </div></div></a>
                               </div>
                                <div class='cubeLink cubeLink9 ' id='cubeNavigation307_cubeLink9' linkid='9' ><a class='cubeLink_a ' href="<?= Yii::$app->urlManager->createUrl(['mobile/yybm']); ?>"  target='_self' id='cubeLink_a9_cubeNav307' >
                                   <div class='cubeLink_bg'></div><div class="cubeLink_ico icon-cube iconfont">&#xe751;</div>
                                   <div class='cubeLink_text g_link'><div class='cubeLink_text_p '>预约报名<p class='cubeLink_subText_p'></p>
                                   </div></div></a>
                               </div>
                           </div>
                       </div>
                    </div>
                 <div class='middleRight middleight307'></div>
              </div>
           </div>
	    </div>
	</div>
</div>