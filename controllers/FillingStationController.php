<?php

namespace frontend\controllers;

use frontend\models\FillingStation;
use frontend\models\FillingStationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FillingStationController implements the CRUD actions for FillingStation model.
 */
class FillingStationController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all FillingStation models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FillingStationSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FillingStation model.
     * @param int $fs_id Fs ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($fs_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($fs_id),
        ]);
    }

    /**
     * Creates a new FillingStation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new FillingStation();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'fs_id' => $model->fs_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FillingStation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $fs_id Fs ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($fs_id)
    {
        $model = $this->findModel($fs_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'fs_id' => $model->fs_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FillingStation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $fs_id Fs ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($fs_id)
    {
        $this->findModel($fs_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FillingStation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $fs_id Fs ID
     * @return FillingStation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($fs_id)
    {
        if (($model = FillingStation::findOne(['fs_id' => $fs_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
