<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Justificativo $model */
/** @var yii\widgets\ActiveForm $form */
use yii\helpers\ArrayHelper;
use yii\web\View;

$fechaActual=date('Y-m-d');
?>

<div class="justificativo-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="name" id="name" value=<?php echo Yii::$app->user->identity->Nombre ?> placeholder="Nombre" disabled style="background-color:gainsboro" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="apellidos" id="apellidos" value=<?php echo Yii::$app->user->identity->Apellido ?> placeholder="Apellido" disabled style="background-color:gainsboro" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="rut" id="rut" value=<?php echo Yii::$app->user->identity->rut ?> placeholder="Rut" disabled style="background-color:gainsboro" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="email" name="demo-email" id="demo-email" value=<?php echo Yii::$app->user->identity->Email ?> placeholder="Correo Electrónico" disabled style="background-color:gainsboro" />
            </div>
            <div class="col-6 col-12-xsmall">
                <?= $form->field($model, 'CodigoAsignatura')->dropdownList(
                        ArrayHelper::map($asignaturas, 'Codigo', 'Nombre')
                        ,['prompt'=>'- Asignatura -','class'=>'input','id'=>'asignatura']
                )->label('');?>
            </div>
            <div class="col-12">
                <?= $form->field($model, 'ActivdadJustificar')->textInput(['maxlength' => true,'class'=>'input','placeholder'=>'Actividad a justificar Ej: Certamen, Laboratorio, Clases, etc'])->label('');?>
            </div>
            <!-- Break -->
            <div class="col-4 col-12-xsmall">
                <?= $form->field($model, 'FechaFaltaStart')->textInput(['type'=>'date','value'=>$fechaActual,'Style'=>'font-size: 13pt;font-weight: 500;line-height: 1.85'])->label('')?>
            </div> 
            <!-- Break -->
            <div class="col-4 col-12-xsmall">
                <?= $form->field($model, 'FechaFaltaEnd')->textInput(['type'=>'date','value'=>$fechaActual,'Style'=>'font-size: 13pt;font-weight: 500;line-height: 1.85'])->label('')?>
            </div> 
             <!-- Break -->
             <div class="col-5">
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
