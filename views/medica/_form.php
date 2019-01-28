<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Persona;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Medica */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="medica-form"></div>
<?php $form = ActiveForm::begin(); ?>

     <?php $dataList=ArrayHelper::map(Persona::find()->where(['tipo'=>'aspirante'])->asArray()->all(), 'cedula','nombres','apellidos');
    ?>
     <?= $form->field($model, 'cedula_atleta')->dropDownList($dataList,['cedula'=>'Nombres'.'Apellidos'])?>

    <?= $form->field($model, 'tipo_prueba')->dropDownList(['Seleccion'=>'Seleccion','Control'=>'Control']) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'hemoglobina')->textInput() ?>

    <?= $form->field($model, 'vcm')->textInput() ?>

    <?= $form->field($model, 'globulos_rojos')->textInput() ?>

    <?= $form->field($model, 'globulos_blancos')->textInput() ?>

    <?= $form->field($model, 'glucosa')->textInput() ?>

    <?= $form->field($model, 'urea')->textInput() ?>

    <?= $form->field($model, 'creatinina')->textInput() ?>

    <?= $form->field($model, 'colesterol')->textInput() ?>

    <?= $form->field($model, 'hdl')->textInput() ?>

    <?= $form->field($model, 'ldl')->textInput() ?>

    <?= $form->field($model, 'trigliceridos')->textInput() ?>

    <?= $form->field($model, 'frecuencia_cardiaca_reposo')->textInput() ?>

    <?= $form->field($model, 'frecuencia_cardiaca_maxima')->textInput() ?>

    <?= $form->field($model, 'porcentaje_fibras_blancas')->textInput() ?>

    <?= $form->field($model, 'porcentaje_fibras_rojas')->textInput() ?>

    <?= $form->field($model, 'reflejos')->textarea(['maxlength' => 30]) ?>

    <?= $form->field($model, 'estado_general')->textarea(['maxlength' => 45]) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
