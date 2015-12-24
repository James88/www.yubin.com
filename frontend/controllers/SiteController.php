<?php
namespace frontend\controllers;

use frontend\components\Controller;
use common\models\Category;
use common\models\Slider;
use common\models\News;
use common\models\Singlepage;
use yii\web\NotFoundHttpException;
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
        //友情链接
        $friendLink = \common\models\Friendlink::find()->where(['isshow'=>  \common\models\YesNo::YES])->orderBy(['ord'=>SORT_ASC])->all();
        return $this->render('index',[
            'bigCate'=>$bigCate,
            'slider'=>$slider,
            'friendlink'=>$friendLink,
        ]);
    }
    
    /*
     * 联系我们
     */
    public function actionAbout(){
        $model = $this->findSinglePage(2);
        return $this->render('singlepage',['model'=>$model]);
    }
    /*
     * 关于我们
     */
    public function actionContact(){
        $model = $this->findSinglePage(1);
        return $this->render('singlepage',['model'=>$model]);
    }
    
    /*
     * 免责声明
     */
    public function actionMianze(){
        $model = $this->findSinglePage(3);
        return $this->render('singlepage',['model'=>$model]);
    }
    
    

    /*
     * 查找单页内容
     */
    protected function findSinglePage($id){
        if(($model = Singlepage::findOne($id)) !== null){
            return $model;
        }else{
            throw new NotFoundHttpException('你访问的页面不存在！');
        }
    }
}
