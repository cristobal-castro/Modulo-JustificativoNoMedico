<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Justificativo $model */
/** @var yii\widgets\ActiveForm $form */
use yii\helpers\ArrayHelper;
?>

<div class="justificativo-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="name" id="name" value="" placeholder="Francisco" enabled />
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
                <?= $form->field($model, 'CodigoAsignatura')->dropdownList(
                        ArrayHelper::map($asignaturas, 'Codigo', 'Nombre')
                    ,
                    ['prompt'=>'- Asignatura -','class'=>'input']
                )->label('');?>
            </div>
            
            <div class="col-12">
            <?= $form->field($model, 'ActivdadJustificar')->textInput(['maxlength' => true,'class'=>'input','placeholder'=>'Actividad a justificar Ej: Certamen, Laboratorio, Clases, etc'])->label('');?>
            </div>
            <!-- Break -->
            <div class="col-4 col-12-xsmall">
                <?= $form->field($model, 'FechaFaltaStart')->textInput(['type'=>'date','value'=>'2022-11-10','Style'=>'font-size: 13pt;font-weight: 500;line-height: 1.85'])->label('')?>
            </div> 
            <!-- Break -->
            <div class="col-4 col-12-xsmall">
                <?= $form->field($model, 'FechaFaltaEnd')->textInput(['type'=>'date','value'=>'2022-11-10','Style'=>'font-size: 13pt;font-weight: 500;line-height: 1.85'])->label('')?>
            </div> 
             <!-- Break -->
             <div class="col-12">
                <?= $form->field($model, 'file')->fileInput()->label('Subir un archivo')?>
            </div> 
            <!-- Break -->
            <div class="col-12">
                <?= $form->field($model, 'Motivo')->textarea(['maxlength' => true,'class'=>'input','placeholder'=>'Ingrese el motivo de su inasistencia'])->label('')?>
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
