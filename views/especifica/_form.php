<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Persona;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Especifica */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="especifica-form"></div>
<?php $form = ActiveForm::begin(); ?>

     <?php $dataList=ArrayHelper::map(Persona::find()->where(['tipo'=>'aspirante'])->asArray()->all(), 'cedula','nombres','apellidos');
    ?>
     <?= $form->field($model, 'cedula_atleta')->dropDownList($dataList,['cedula'=>'Nombres'.'Apellidos'])?>

    <?= $form->field($model, 'tipo_prueba')->dropDownList(['Seleccion'=>'Seleccion','Control'=>'Control']) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'resistencia')->textInput() ?>

    <?= $form->field($model, 'fuerza')->textInput() ?>

    <?= $form->field($model, 'tecnica')->textInput() ?>

    <?= $form->field($model, 'velocidad')->textInput() ?>

    <?= $form->field($model, 'tactica')->textInput() ?>

    <?= $form->field($model, 'observaciones_especificas')->textInput(['maxlength' => 70]) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
