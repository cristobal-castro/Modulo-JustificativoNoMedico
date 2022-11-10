<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Justificativo $model */

$this->title = $model->idJustificativo;
$this->params['breadcrumbs'][] = ['label' => 'Justificativos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="justificativo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idJustificativo' => $model->idJustificativo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idJustificativo' => $model->idJustificativo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idJustificativo',
            'fechaFalta',
            'motivoInasistencia',
            'actividadJusticar',
            'nombre_academico',
            'asignatura',
            'estado',
            'fechaEnvio',
        ],
    ]) ?>

</div>
