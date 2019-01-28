<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AtletaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atleta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cedula_atleta') ?>

    <?= $form->field($model, 'curso_id') ?>

    <?= $form->field($model, 'deporte_id') ?>

    <?= $form->field($model, 'cedula_entrenador') ?>

    <?= $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'nivel') ?>

    <?php // echo $form->field($model, 'ranking') ?>

    <?php // echo $form->field($model, 'escuela_procedencia') ?>

    <?php // echo $form->field($model, 'seleccionado') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
