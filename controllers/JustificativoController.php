<?php

namespace app\controllers;

use app\models\Asignatura;
use app\models\Justificativo;
use app\models\JustificativoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Persona;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

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
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
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

                //Subir archivos
                $model->FechaEnvio=date('d-m-Y');
                $imgName = $model -> FechaEnvio;
                $model->file= UploadedFile::getInstance($model,'file');
                if($model->file= UploadedFile::getInstance($model,'file')){
                    $model->file->saveAs('uploads/'.$imgName.'.'.$model->file->extension);
                }
                

                $model->Estado='Pendiente';
                $model->rut=Yii::$app->user->identity->rut;
                $model->save();
                return $this->redirect(['/justificativo']);
            }
        } else {
            $model->loadDefaultValues();
        }
        $usuario=Persona::findIdentity(Yii::$app->user->identity->rut);
        $asignaturas=Asignatura::find()->all();
        return $this->render('create', [
            'model' => $model,
            'usuario'=> $usuario,
            'asignaturas'=>$asignaturas
        ]);
    }

    public function actionJustificativos(){

        $searchModel = new JustificativoSearch();
        $dataProvider = new ActiveDataProvider([
            'query'=> Justificativo::find()->where(['rut'=>Yii::$app->user->identity->rut]),
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => [
                    'FechaEnvio',
                    'FechaFaltaStart',
                    'FechaFaltaEnd',
                    'ActivdadJustificar',
                    'Estado'
                ],
            ],
        ]);
        

        return $this->render('misjustificativos', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

       
    }


    /**
     * Updates an existing Justificativo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Justificativo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Justificativo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Justificativo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Justificativo::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
