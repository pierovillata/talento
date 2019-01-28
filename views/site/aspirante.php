<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Atleta;
use app\models\Entrenador;
use app\models\Curso;
use app\models\Deporte;
use yii\helpers\ArrayHelper;
use app\models\Persona;

use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Persona */
/* @var $form ActiveForm */
?>
<?php 
if(!$mensaje=null)
{ ?>        

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h3>Aspirante</h3></div>
  <div class="panel-body">
   
  		<div class="persona-aspirante">
                    <?php $model2=new Atleta();?>
    
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

    <?= $form->field($model, 'direccion')->textarea(['maxlength' => 100]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => 20]) ?>
   
    <?= $form->field($model2, 'escuela_procedencia')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'tipo')->dropDownList(['Aspirante'=>'Aspirante']) ?>
                    
                    <div><fieldset><legend>Informacion extra</legend>
                    
     <?= $form->field($model2, 'curso_id')->dropDownList(['1'=>'Ninguno']) ?>   
                            
       <?= $form->field($model2, 'deporte_id')->dropDownList(['1'=>'Evaluacion']) ?>  
                            
       <?= $form->field($model2, 'cedula_entrenador')->dropDownList(['100'=>'Evaluador']) ?> 
                            
   
   
     
                        
                        
                        
                        </fieldset></div>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div><!-- persona-aspirante -->



  </div>
</div>

<?php
}else
{
    ?> <div class="alert alert-info" role="alert"><?php echo $mensaje;?></div><?php
}?>