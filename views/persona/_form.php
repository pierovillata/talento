<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Persona */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="persona-form"></div>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => 45]) ?>

     <?= $form->field($model, 'fecha_nacimiento')->textInput(['maxlength' => 45]) ?>

     <?php  DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha_nacimiento',
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
]);    ?>

    

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'sexo')->dropDownList(['Masculino'=>'Masculino','Femenino'=>'Femenino']) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'tipo')->dropDownList(['Aspirante'=>'Aspirante','Entrenador'=>'Entrenador']) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
