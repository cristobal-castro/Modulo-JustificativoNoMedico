<?php

use app\models\Justificativo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\JustificativoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Justificativos';
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Justificativo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'idJustificativo',
            'fechaEnvio',
            'fechaFalta',
            'actividadJusticar',
            'asignatura',
            'nombre_academico',
            'motivoInasistencia',
            'estado',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Justificativo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idJustificativo' => $model->idJustificativo]);
                 }
            ],
        ],
        'tableOptions' =>['class' => 'alt'],
    ]); ?>


