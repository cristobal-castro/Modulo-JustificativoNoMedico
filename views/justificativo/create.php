<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Justificativo $model */

$this->title = 'Crear Justificativo';
$this->params['breadcrumbs'][] = ['label' => 'Justificativos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="justificativo-create">

    <h2><?= Html::encode('Solicitar Justificativo') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
