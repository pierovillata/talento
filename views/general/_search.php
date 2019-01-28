<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GeneralSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="general-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_general') ?>

    <?= $form->field($model, 'cedula_atleta') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'tipo_prueba') ?>

    <?= $form->field($model, 'velocidad') ?>

    <?php // echo $form->field($model, 'lanzamiento_balon') ?>

    <?php // echo $form->field($model, 'carrera_distancia') ?>

    <?php // echo $form->field($model, 'salto_vertical') ?>

    <?php // echo $form->field($model, 'salto_horizontal') ?>

    <?php // echo $form->field($model, 'agilidad') ?>

    <?php // echo $form->field($model, 'flexibilidad') ?>

    <?php // echo $form->field($model, 'observaciones_generales') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
