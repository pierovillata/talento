<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContenidoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contenido-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcontenido') ?>

    <?= $form->field($model, 'sesion_id') ?>

    <?= $form->field($model, 'calentamiento') ?>

    <?= $form->field($model, 'parte_principal') ?>

    <?= $form->field($model, 'parte_final') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
