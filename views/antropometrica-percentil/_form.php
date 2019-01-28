<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AntropometricaPercentil */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="antropometrica-percentil-form"></div>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_prueba_antropometrica')->textInput() ?>

    <?= $form->field($model, 'cedula_atleta')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'tipo_prueba')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'peso')->textInput() ?>

    <?= $form->field($model, 'altura_pie')->textInput() ?>

    <?= $form->field($model, 'altura_sentado')->textInput() ?>

    <?= $form->field($model, 'abertura')->textInput() ?>

    <?= $form->field($model, 'porcentaje_grasa')->textInput() ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
