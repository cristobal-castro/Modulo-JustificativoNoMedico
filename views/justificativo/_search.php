<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JustificativoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="justificativo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idJustificativo') ?>

    <?= $form->field($model, 'fechaFalta') ?>

    <?= $form->field($model, 'motivoInasistencia') ?>

    <?= $form->field($model, 'actividadJusticar') ?>

    <?= $form->field($model, 'nombre_academico') ?>

    <?php // echo $form->field($model, 'asignatura') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'fechaEnvio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
