<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2015-12-28 16:01:14
 */
use frontend\assets\SuperSliderAsset;
SuperSliderAsset::register($this);
$this->title = $model->zhiweiming;
$this->params['breadcrumbs'][] = ['label'=>'最新招聘','url'=>['job/index']];
$this->params['breadcrumbs'][] = ['label'=>$model->zhiweiming];


?>
<div class="container ">
	<div class="container-left f-l">
    	<?php echo $this->render('/layouts/_breadcrumbs'); ?>
        	<div class="zpqz">
                <div  class="zp-zc"><?= $model->zhiweiming; ?></div>
                <div class="zp-gs"><?= $model->company->name; ?></div>
            <table width="600" border="1">
  <tbody>
    <tr>
        <td><span class="bt-ys">工作地区：</span> <?= $model->gongzuodiqu; ?> </td>
      <td><span class="bt-ys">职位薪资：</span> <?= $model->zhiweixinzi; ?></td>
      <td><span class="bt-ys">学历要求：</span> <?= $model->xueliyaoqiu; ?></td>
    </tr>
    <tr>
      <td><span class="bt-ys">招聘人数 ：</span>  <?= $model->zhaopinrenshu; ?> </td>
      <td><span class="bt-ys">工作性质：</span>  <?= $model->gongzuoxingzhi; ?></td>
      <td><span class="bt-ys">性别要求：</span>  <?= $model->xingbieyaoqiu; ?></td>
    </tr>
    <tr>
        <td> <span class="bt-ys">发布日期：</span> <?= common\components\Utils::dateFormat($model->created_at, 0); ?></td>
      <td><span class="bt-ys">工作经验：</span> <?= $model->gongzuojingyan; ?></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
            <div class="zp-fl">
                <?php
                    $tese = explode(",", $model->jingzhengyoushi);
                    foreach($tese as $k=>$v):
                ?>
                <span><?= $v; ?></span>
                <?php endforeach; ?>
               
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="slideTxtBox-zp clear" id="zpqz-tab">
			<div class="hd">
				<ul><li>职位描述</li><li>公司介绍</li></ul>
			</div>
			<div class="bd">
				<ul>
                    <li><?= $model->zhiweimiaoshu; ?></li>
				</ul>
				<ul>
                    <li><?= $model->company->content; ?></li>
					
				</ul>
			</div>
		</div>
        
	
		<div class="jg m-t-20">敬告：此信息只为找工作的朋友提供参考，本网站不对其真实性和有效性负法律上的责任。</div>
        <div class="xian"></div>
        <div class="zp-detail">上一篇:<a href="#"><label class="zx-fl" >[招聘]</label>郑州宇斌造价第二建筑分队<label class="zx-m-f-l">诚招</label>
        	    <label class="zx-ys">造价员</label></a></div>
        <div class="zp-detail">下一篇:<a href="#"><label class="zx-fl" >[招聘]</label>郑州宇斌造价第二建筑分队<label class="zx-m-f-l">诚招</label>
        	    <label class="zx-ys">造价员</label></a></div> 
             <div class="fhlb"><a href="#">返回列表</a></div>
            
            </div>      
        	
        <div class="clear"></div>
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
    </div>
	<div class="clear"></div>
</div>
<?php
$js = <<< JS
jQuery(".slideTxtBox-zp").slide()
JS;
$this->registerJs($js);
?>