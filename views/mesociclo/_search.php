<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MesocicloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mesociclo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_mesociclo') ?>

    <?= $form->field($model, 'macrociclo_id') ?>

    <?= $form->field($model, 'nombre_mesociclo') ?>

    <?= $form->field($model, 'tipo_mesociclo') ?>

    <?= $form->field($model, 'fecha_inicio') ?>

    <?php // echo $form->field($model, 'fecha_final') ?>

    <?php // echo $form->field($model, 'objetivos') ?>

    <?php // echo $form->field($model, 'volumen') ?>

    <?php // echo $form->field($model, 'intensidad') ?>

    <?php // echo $form->field($model, 'porcentaje_resistencia_aerobica') ?>

    <?php // echo $form->field($model, 'porcentaje_resistencia_anaerobica') ?>

    <?php // echo $form->field($model, 'porcentaje_velocidad') ?>

    <?php // echo $form->field($model, 'porcentaje_tecnica') ?>

    <?php // echo $form->field($model, 'porcentaje_agilidad') ?>

    <?php // echo $form->field($model, 'porcentaje_fuerza') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
