<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AntropometricaPercentilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="antropometrica-percentil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_prueba_antropometrica') ?>

    <?= $form->field($model, 'cedula_atleta') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'tipo_prueba') ?>

    <?= $form->field($model, 'peso') ?>

    <?php // echo $form->field($model, 'altura_pie') ?>

    <?php // echo $form->field($model, 'altura_sentado') ?>

    <?php // echo $form->field($model, 'abertura') ?>

    <?php // echo $form->field($model, 'porcentaje_grasa') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
