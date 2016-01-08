<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2016-1-7 12:11:15
 */
?>
<li>
    <div class="new-bt"> <span><?= date('m-d',$model->created_at); ?></span><a href="<?= Yii::$app->urlManager->createUrl(['mobile/show','id'=>$model->id]); ?>"><?= $model->title; ?></a></div>
</li>
