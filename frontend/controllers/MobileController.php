<?php
/*
 * @author Lmy
 * QQ:6232967
 * Create at 2016-1-4 13:55:20
 */
namespace frontend\controllers;

use yii;
use frontend\components\Controller;

class MobileController extends Controller{
    public $layout = "mobile_main";
    
    public function actionIndex(){
        //首页轮播图
        $slider = \common\models\Slider::find()->where(['place'=>1])->orderBy(['ord'=>SORT_ASC])->all();
        return $this->render('index',[
            'slider'=>$slider,
        ]);
    }
    
    /*
     * 联系我们
     */
    public function actionContact(){
        $model = $this->findSinglePage(1);
        return $this->render('contact',['model'=>$model]);
    }
    
    /*
     * 培训项目
     */
    public function actionPxxm(){
        
        return $this->render('pxxm');
    }
    /*
     * 预约报名
     */
    public function actionYybm(){
        $model = new \common\models\Feedback;
        if($model->load(Yii::$app->request->post()) && $model->save()){
            echo "<script>alert('预约信息提交成功！');</script>";
        }
        return $this->render('yybm',['model'=>$model]);
    }
    
    /*
     * 新闻列表
     */
    public function actionList($id){
        $where = ['status'=>1,'category_id'=>$id];
        $query = \common\models\News::find()->where($where);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
            'pagination' => ['defaultPageSize' => 2],
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
        ]);

        return $this->render('list',[
            'id'=>$id,
            'dataProvider' => $dataProvider,
        ]);
    }
    /*
     * 新闻详情
     */
    public function actionShow($id){
        $model = $this->findNews($id);
        return $this->render('show',['model'=>$model]);
    }
    /*
     * 单页内容详情
     */
    public function actionPage($id){
        $model = $this->findSinglePage($id);
        return $this->render('page',['model'=>$model]);
    }
    /*
     * 查找单页内容
     */
    protected function findSinglePage($id){
        if(($model = \common\models\Singlepage::findOne($id)) !== null){
            return $model;
        }else{
            throw new NotFoundHttpException('你访问的页面不存在！');
        }
    }
    
    /*
     * 查找新闻内容
     */
    protected function findNews($id){
        if(($model = \common\models\News::findOne($id)) !== null){
            return $model;
        }else{
            throw new NotFoundHttpException('你访问的页面不存在！');
        }
    }
    
}

?>

