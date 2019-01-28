<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedicaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_medica') ?>

    <?= $form->field($model, 'cedula_atleta') ?>

    <?= $form->field($model, 'tipo_prueba') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'hemoglobina') ?>

    <?php // echo $form->field($model, 'vcm') ?>

    <?php // echo $form->field($model, 'globulos_rojos') ?>

    <?php // echo $form->field($model, 'globulos_blancos') ?>

    <?php // echo $form->field($model, 'glucosa') ?>

    <?php // echo $form->field($model, 'urea') ?>

    <?php // echo $form->field($model, 'creatinina') ?>

    <?php // echo $form->field($model, 'colesterol') ?>

    <?php // echo $form->field($model, 'hdl') ?>

    <?php // echo $form->field($model, 'ldl') ?>

    <?php // echo $form->field($model, 'trigliceridos') ?>

    <?php // echo $form->field($model, 'frecuencia_cardiaca_reposo') ?>

    <?php // echo $form->field($model, 'frecuencia_cardiaca_maxima') ?>

    <?php // echo $form->field($model, 'porcentaje_fibras_blancas') ?>

    <?php // echo $form->field($model, 'porcentaje_fibras_rojas') ?>

    <?php // echo $form->field($model, 'reflejos') ?>

    <?php // echo $form->field($model, 'estado_general') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
