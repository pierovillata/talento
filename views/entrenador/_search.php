<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntrenadorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entrenador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cedula_entrenador') ?>

    <?= $form->field($model, 'nivel') ?>

    <?= $form->field($model, 'tipo_entrenador') ?>

    <?= $form->field($model, 'lugar_trabajo') ?>

    <?= $form->field($model, 'dias_trabajo') ?>

    <?php // echo $form->field($model, 'hora_inicio_am') ?>

    <?php // echo $form->field($model, 'hora_final_am') ?>

    <?php // echo $form->field($model, 'hora_inicio_tarde') ?>

    <?php // echo $form->field($model, 'hora_final_tarde') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
