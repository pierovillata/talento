<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AntropometricaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="antropometrica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_antropometrica') ?>

    <?= $form->field($model, 'cedula_atleta') ?>

    <?= $form->field($model, 'tipo_prueba') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'peso') ?>

    <?php // echo $form->field($model, 'altura_pie') ?>

    <?php // echo $form->field($model, 'altura_sentado') ?>

    <?php // echo $form->field($model, 'indice_cormico') ?>

    <?php // echo $form->field($model, 'diametro_cintura') ?>

    <?php // echo $form->field($model, 'porcentaje_grasa') ?>

    <?php // echo $form->field($model, 'peso_magro') ?>

    <?php // echo $form->field($model, 'circunferencias_cadera') ?>

    <?php // echo $form->field($model, 'circunferencia_brazo') ?>

    <?php // echo $form->field($model, 'circunferencia_pectoral') ?>

    <?php // echo $form->field($model, 'abertura') ?>

    <?php // echo $form->field($model, 'longitud_pie') ?>

    <?php // echo $form->field($model, 'longitud_mano') ?>

    <?php // echo $form->field($model, 'somatotipo') ?>

    <?php // echo $form->field($model, 'observaciones_antropometricas') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
