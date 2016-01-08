<?php

/*
 * @author Lmy
 * QQ:6232967
 * Create at 2016-1-6 20:25:13
 */
echo \yii\widgets\Breadcrumbs::widget([
                'homeLink'=>['label'=>'首页','url'=>yii\helpers\Url::to(['mobile/index']),'template'=>'{link}'],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'options' => ['class' => 'currentposition'],
                'tag' => 'div',
                'itemTemplate' => ' &gt; {link}',
                'activeItemTemplate' => ' &gt; {link}',
            ])


?>
