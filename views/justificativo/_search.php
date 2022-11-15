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

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Estado') ?>

    <?= $form->field($model, 'FechaEnvio') ?>

    <?= $form->field($model, 'FechaFaltaStart') ?>

    <?= $form->field($model, 'FechaFaltaEnd') ?>

    <?php // echo $form->field($model, 'ActivdadJustificar') ?>

    <?php // echo $form->field($model, 'Motivo') ?>

    <?php // echo $form->field($model, 'rut') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
