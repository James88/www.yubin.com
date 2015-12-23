<?php
namespace frontend\controllers;
use yii;
use frontend\components\Controller;
use common\models\Category;
use common\models\News;
use common\models\Status;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;
/**
 * Site controller
 */
class NewsController extends Controller
{
    public function actionIndex($cid = ''){
        $allCategory = Category::find()->asArray()->all();
        $arrayCategoryIdName = ArrayHelper::map($allCategory, 'id', 'name');
        $arrSubCat = Category::getArraySubCatalogId($cid, $allCategory);
        $where = [
            'and',
            ['category_id'=>$arrSubCat],
            'status='.Status::STATUS_ACTIVE,
        ];
        $query = News::find()->where($where);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['defaultPageSize' => Yii::$app->params['defaultPageSizeProduct']],
            'sort' => ['defaultOrder' => ['created_at' => SORT_DESC]],
        ]);
        return $this->render('index', [
            'models' => $dataProvider->getModels(),
            'pagination' => $dataProvider->pagination,
            'cid' => $cid,
        ]);
        
    }
}
