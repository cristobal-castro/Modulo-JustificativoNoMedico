<?php
use app\models\Justificativo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
/** @var yii\web\View $this */

$this->title = 'Mis Justificativos';
$this->params['breadcrumbs'][] = $this->title;
?>
<body>
    <h3>Mis justificativos (Estudiante) </h3>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
               'attribute' => 'FechaEnvio',
               'format' =>  ['date', 'php:d-m-Y'],
            ],
            [
               'attribute' => 'FechaFaltaStart',
               'format' =>  ['date', 'php:d-m-Y'],
            ],
            [
               'attribute' => 'FechaFaltaEnd',
               'format' =>  ['date', 'php:d-m-Y'],
            ],
            'ActivdadJustificar',
            'Estado',
            [
               
               'class' => ActionColumn::className(),
               'urlCreator' => function ($action, Justificativo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
               },
            ],
        ],
        'tableOptions' =>['class' => 'alt'],
    ]); ?>             
</body>