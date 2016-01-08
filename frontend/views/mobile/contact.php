<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2016-1-6 20:05:59
 */
$this->title = "联系我们";
$this->params['breadcrumbs'][]=['label'=>$this->title];
?>
<div class="containter">
	<?= $this->render('_breadcrumbs'); ?>
    <div class="containter-zt">
    	<div class="contact">
            <?= $model->content; ?>
        </div>
        <div class="clear"></div>
       
     </div>
</div>