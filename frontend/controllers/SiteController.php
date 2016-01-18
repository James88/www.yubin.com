<?php
namespace frontend\controllers;

use yii;
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
    public function beforeAction($action)
    {            
        if ($action->id == 'yuyue') {
            Yii::$app->controller->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }
    public function actionIndex(){
        //页面左侧分类
        $bigCate = Category::find()->where(['is_nav'=>\common\models\YesNo::YES])->orderBy(['sort_order'=>SORT_ASC])->all();
        //首页轮播图
        $slider = Slider::find()->where(['place'=>0])->orderBy(['ord'=>SORT_ASC])->all();
        //师生风采
        $teachers = \common\models\Album::find()->orderBy(['id'=>SORT_DESC])->limit(5)->all();
        //友情链接
        $friendLink = \common\models\Friendlink::find()->where(['isshow'=>  \common\models\YesNo::YES])->orderBy(['ord'=>SORT_ASC])->all();
        return $this->render('index',[
            'bigCate'=>$bigCate,
            'slider'=>$slider,
            'teachers'=>$teachers,
            'friendlink'=>$friendLink,
        ]);
    }
    /*
     * 在线报名
     */
    public function actionFeed(){
        $model = new \common\models\Feedback();
        if($model->load(Yii::$app->request->post()) && $model->save()){
            echo "<script>alert('预约信息提交成功！');</script>";
        }
        return $this->render('feedback',['model'=>$model]);
        //return $this->render('feedback');
    }
    /*
     * 在线预约
     */
    public function actionYuyue(){
        $model = new \common\models\Feedback();
        if($model->load(Yii::$app->request->post()) && $model->save()){
            echo "<script>alert('您的信息已提交，请耐心等待查询结果。');window.history.go(-1);</script>";
        }else{
            echo "<script>alert('请准确填写您的信息');window.history.go(-1);</script>";
        }
        //return $this->render('feedback',['model'=>$model]);
        //return $this->render('feedback');
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
     * 造价员培训
     */
    public function actionZaojiayuan(){
        $model = $this->findSinglePage(4);
        return $this->render('singlepage',['model'=>$model]);
    }
    
    /*
     * 单页显示
     */
    public function actionPage($id){
        $model = $this->findSinglePage($id);
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
