<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Justificativo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="justificativo-form">

    <?php $form = ActiveForm::begin(); ?>

        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="name" id="name" value="" placeholder="Francisco" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="apellidos" id="apellidos" value="" placeholder="Lizana" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="rut" id="rut" value="" placeholder="20.363.288-6" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="email" name="demo-email" id="demo-email" value="" placeholder="francisco@gmail.com" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="email" name="carrera" id="carrera" value="" placeholder="Ingenieria Civil Infomatica" />
            </div>
            <div class="col-12">
                <?= $form->field($model, 'asignatura')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-12">
                <?= $form->field($model, 'nombre_academico')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-12">
                <?= $form->field($model, 'actividadJusticar')->textInput(['maxlength' => true]) ?>
            </div>
            <!-- Break -->
            <div class="container">
                <div class="row">
                    <div class="col-2 col-12-small">
                        <?= $form->field($model, 'fechaFalta')->input(['date']) ?>
                    </div> 
                </div>
            </div> 
            <!-- Break -->
            <div class="col-12">
                <?= $form->field($model, 'motivoInasistencia')->textarea(['maxlength' => true]) ?>
            </div>
            <!-- Break -->
            <!-- Break -->
            <div class="col-12">
                <ul class="actions">
                    <li>
                        <?= Html::submitButton('Enviar', ['class' => 'primary']) ?>
                    </li>
                </ul>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
