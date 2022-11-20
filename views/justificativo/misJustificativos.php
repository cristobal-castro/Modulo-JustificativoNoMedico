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
               'label'=> 'Inicio falta',
               'format' =>  ['date', 'php:d-m-Y'],
            ],
            [
               'attribute' => 'FechaFaltaEnd',
               'label'=> 'Termino falta',
               'format' =>  ['date', 'php:d-m-Y'],
            ],
            [
               'attribute' => 'ActivdadJustificar',
               'label'=> 'Actividad a Justificar',
            ],
            'Estado',
            [
               'header'=> 'Acciones',
               'class' => 'yii\grid\ActionColumn',
               'template' => '{view} {link}',
               'buttons' => [
                   'link' => function ($url,$model,$key) {
                       return Html::a('Meta', $url);
                   },
              ],
           ],
        ],
        'tableOptions' =>['class' => 'table.alt','Style' => 'font-size:medium;'],
    ]); ?>             
</body>