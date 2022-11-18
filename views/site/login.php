<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="col-sm-6">
        <ul>
            <li>Ingrese con sus datos de intranet UBB.</li>
            <li>Los campos con <span class="required">*</span> son requeridos.</li>
        </ul>
    </div>
    <div class="col-sm-6">
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                'inputOptions' => ['class' => 'col-sm-6 form-control'],
                'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
            ],
        ]); ?>
        
            <?= $form->field($model, 'correo')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div class="offset-lg-1 col-lg-11">
                    <?= Html::submitButton('Iniciar sesión', ['class' => 'primary', 'name' => 'login-button']) ?>
                </div>
            </div>

        <?php ActiveForm::end(); ?>
        
    </> 
    >
    </div>

</div>
