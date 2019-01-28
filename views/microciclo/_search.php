<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MicrocicloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="microciclo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_microciclo') ?>

    <?= $form->field($model, 'mesociclo_id') ?>

    <?= $form->field($model, 'tipo_microciclo') ?>

    <?= $form->field($model, 'nombre_microciclo') ?>

    <?= $form->field($model, 'semana') ?>

    <?php // echo $form->field($model, 'duracion_dias') ?>

    <?php // echo $form->field($model, 'objetivos_microciclo') ?>

    <?php // echo $form->field($model, 'volumen') ?>

    <?php // echo $form->field($model, 'intensidad') ?>

    <?php // echo $form->field($model, 'resistencia_aerobica') ?>

    <?php // echo $form->field($model, 'resistencia_mixta') ?>

    <?php // echo $form->field($model, 'resistencia_anaerobica') ?>

    <?php // echo $form->field($model, 'velocidad') ?>

    <?php // echo $form->field($model, 'fuerza_maxima') ?>

    <?php // echo $form->field($model, 'fuerza_explosiva') ?>

    <?php // echo $form->field($model, 'fuerza_resistencia') ?>

    <?php // echo $form->field($model, 'tecnica') ?>

    <?php // echo $form->field($model, 'tactica') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
