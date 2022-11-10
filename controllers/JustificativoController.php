<?php

namespace app\controllers;

use app\models\Justificativo;
use app\models\JustificativoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JustificativoController implements the CRUD actions for Justificativo model.
 */
class JustificativoController extends Controller
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
     * Lists all Justificativo models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JustificativoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Justificativo model.
     * @param int $idJustificativo Id Justificativo
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idJustificativo)
    {
        return $this->render('view', [
            'model' => $this->findModel($idJustificativo),
        ]);
    }

    /**
     * Creates a new Justificativo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Justificativo();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->estado='Pendiente';
                $model->fechaEnvio=date('d-m-Y');
                $model->save();
                return $this->redirect(['view', 'idJustificativo' => $model->idJustificativo]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Justificativo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idJustificativo Id Justificativo
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idJustificativo)
    {
        $model = $this->findModel($idJustificativo);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idJustificativo' => $model->idJustificativo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Justificativo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idJustificativo Id Justificativo
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idJustificativo)
    {
        $this->findModel($idJustificativo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Justificativo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idJustificativo Id Justificativo
     * @return Justificativo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idJustificativo)
    {
        if (($model = Justificativo::findOne(['idJustificativo' => $idJustificativo])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
