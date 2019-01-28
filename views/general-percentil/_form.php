<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GeneralPercentil */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="general-percentil-form"></div>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_prueba_general')->textInput() ?>

    <?= $form->field($model, 'cedula_atleta')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'tipo_prueba')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'velocidad')->textInput() ?>

    <?= $form->field($model, 'lanzamiento_balon')->textInput() ?>

    <?= $form->field($model, 'carrera_distancia')->textInput() ?>

    <?= $form->field($model, 'salto_horizontal')->textInput() ?>

    <?= $form->field($model, 'salto_vertical')->textInput() ?>

    <?= $form->field($model, 'agilidad')->textInput() ?>

    <?= $form->field($model, 'flexibilidad')->textInput() ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
