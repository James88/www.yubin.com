<?php
namespace frontend\controllers;

use frontend\components\Controller;
use common\models\Category;
use common\models\Slider;
/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex(){
        //页面左侧分类
        $bigCate = Category::find()->where(['is_nav'=>\common\models\YesNo::YES])->orderBy(['sort_order'=>SORT_ASC])->all();
        //首页轮播图
        $slider = Slider::find()->where(['place'=>0])->orderBy(['ord'=>SORT_ASC])->all();
        return $this->render('index',[
            'bigCate'=>$bigCate,
            'slider'=>$slider,
        ]);
    }
}
