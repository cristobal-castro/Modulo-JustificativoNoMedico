<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Justificativo $model */

$this->title = 'Update Justificativo: ' . $model->idJustificativo;
$this->params['breadcrumbs'][] = ['label' => 'Justificativos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idJustificativo, 'url' => ['view', 'idJustificativo' => $model->idJustificativo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="justificativo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
