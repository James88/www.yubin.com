<?php

namespace backend\controllers;

use Yii;
use common\models\Contestant;
use common\models\ContestantSearch;
use common\models\ContestantImage;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\widgets\image\UploadAction;
use backend\widgets\image\RemoveAction;

/**
 * ContestantController implements the CRUD actions for Contestant model.
 */
class ContestantController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
    public function actions() {
        return [
            'uploadimage' => [
                'class' => UploadAction::className(),
                'upload' => 'upload/contestant',
            ],
            
            'remove' => [
                'class' => RemoveAction::className(),
                'uploadDir' => '@wwwdir/',
            ],
        ];
    }

    /**
     * Lists all Contestant models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContestantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Contestant model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Contestant model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Contestant();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Contestant model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            if (isset(Yii::$app->request->post()['imageSort'])) {
                foreach (Yii::$app->request->post()['imageSort'] as $key => $sortOrder) {
                    ContestantImage::updateAll(['sort_order' => $sortOrder], ['id' => $key]);
                }
            }

            $productImage = ContestantImage::find()->where(['contestant_id' => $id])->orderBy(['sort_order' => SORT_ASC])->one();
            if ($productImage) {
                $model->image = $productImage->image;
                $model->thumb = $productImage->thumb;
                $model->save();
            }
            
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Contestant model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Contestant model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Contestant the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Contestant::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
