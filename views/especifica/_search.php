<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EspecificaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="especifica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_especifica') ?>

    <?= $form->field($model, 'cedula_atleta') ?>

    <?= $form->field($model, 'tipo_prueba') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'resistencia') ?>

    <?php // echo $form->field($model, 'fuerza') ?>

    <?php // echo $form->field($model, 'tecnica') ?>

    <?php // echo $form->field($model, 'velocidad') ?>

    <?php // echo $form->field($model, 'tactica') ?>

    <?php // echo $form->field($model, 'observaciones_especificas') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
