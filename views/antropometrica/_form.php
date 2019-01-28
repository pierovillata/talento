<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Persona;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Antropometrica */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="antropometrica-form"></div>
<?php $form = ActiveForm::begin(); ?>

    <?php $dataList=ArrayHelper::map(Persona::find()->where(['tipo'=>'aspirante'])->asArray()->all(), 'cedula','nombres','apellidos');
    ?>
     <?= $form->field($model, 'cedula_atleta')->dropDownList($dataList,['cedula'=>'Nombres'.'Apellidos'])?>
    
     
    
    <?= $form->field($model, 'tipo_prueba')->dropDownList(['Seleccion'=>'Seleccion','Control'=>'Control']) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'peso')->textInput() ?>

    <?= $form->field($model, 'altura_pie')->textInput() ?>

    <?= $form->field($model, 'altura_sentado')->textInput() ?>

    <?= $form->field($model, 'indice_cormico')->textInput() ?>

    <?= $form->field($model, 'diametro_cintura')->textInput() ?>

    <?= $form->field($model, 'porcentaje_grasa')->textInput() ?>

    <?= $form->field($model, 'peso_magro')->textInput() ?>

    <?= $form->field($model, 'circunferencias_cadera')->textInput() ?>

    <?= $form->field($model, 'circunferencia_brazo')->textInput() ?>

    <?= $form->field($model, 'circunferencia_pectoral')->textInput() ?>

    <?= $form->field($model, 'abertura')->textInput() ?>

    <?= $form->field($model, 'longitud_pie')->textInput() ?>

    <?= $form->field($model, 'longitud_mano')->textInput() ?>

    <?= $form->field($model, 'somatotipo')->dropDownList(['Ectomorfo'=>'Ectomorfo','Mesomorfo'=>'Mesomorfo',
        'Endomorfo'=>'Endomorfo']) ?>

    <?= $form->field($model, 'observaciones_antropometricas')->textInput(['maxlength' => 45]) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
