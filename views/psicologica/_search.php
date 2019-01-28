<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PsicologicaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="psicologica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_psicologia') ?>

    <?= $form->field($model, 'cedula_atleta') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'tipo_prueba') ?>

    <?= $form->field($model, 'motivacion') ?>

    <?php // echo $form->field($model, 'descripcion_motivacion') ?>

    <?php // echo $form->field($model, 'personalidad') ?>

    <?php // echo $form->field($model, 'descripcion_personalidad') ?>

    <?php // echo $form->field($model, 'actitud') ?>

    <?php // echo $form->field($model, 'descripcion_actitud') ?>

    <?php // echo $form->field($model, 'observaciones_psicologicas') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
