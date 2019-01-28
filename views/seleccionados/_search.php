<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeleccionadosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seleccionados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cedula_atleta') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'tipo_prueba') ?>

    <?= $form->field($model, 'puntuacion') ?>

    <?= $form->field($model, 'seleccionado') ?>

    <?php // echo $form->field($model, 'recomendacion') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
