<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MacrocicloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="macrociclo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_macrociclo') ?>

    <?= $form->field($model, 'id_plan') ?>

    <?= $form->field($model, 'tipo_macrociclo') ?>

    <?= $form->field($model, 'numero_semanas') ?>

    <?= $form->field($model, 'fecha_inicio') ?>

    <?php // echo $form->field($model, 'fecha_final') ?>

    <?php // echo $form->field($model, 'objetivos') ?>

    <?php // echo $form->field($model, 'competiciones') ?>

    <?php // echo $form->field($model, 'horas_totales') ?>

    <?php // echo $form->field($model, 'preparacion_fisica') ?>

    <?php // echo $form->field($model, 'preparacion_tecnica') ?>

    <?php // echo $form->field($model, 'preparacion_tactica') ?>

    <?php // echo $form->field($model, 'preparacion_psicologica') ?>

    <?php // echo $form->field($model, 'estado_macrociclo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
