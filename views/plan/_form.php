<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Deporte;
use app\models\Persona

/* @var $this yii\web\View */
/* @var $model app\models\Plan */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="plan-form"></div>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ano_plan')->textInput() ?>

   <?php $dataList=ArrayHelper::map(Persona::find()->where(['tipo'=>'entrenador'])->asArray()->all(), 'cedula', 'nombres','apellidos');
    ?>
    <?= $form->field($model, 'cedula_entrenador')->dropDownList($dataList,['cedula'=>'nombres'.'apellidos'])?>

    <?php $dataList=ArrayHelper::map(Deporte::find()->asArray()->all(), 'nombre_deporte','nombre_deporte','tipo_deporte');
    ?>
    <?= $form->field($model, 'deporte')->dropDownList($dataList,['nombre_deporte'=>'nombre_deporte'.'tipo_deporte'])?>
        
        
    

    <?= $form->field($model, 'objetivos_generales')->textarea(['maxlength' => 150]) ?>

    <?= $form->field($model, 'objetivos_especificos')->textarea(['maxlength' => 150]) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
