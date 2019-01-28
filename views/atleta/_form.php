<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Curso;
use app\models\Entrenador;
use app\models\Deporte;
use yii\jui\AutoComplete;
use app\models\Persona;

/* @var $this yii\web\View */
/* @var $model app\models\Atleta */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="atleta-form"></div>
<?php $form = ActiveForm::begin(); ?>

     <?php $dataList=ArrayHelper::map(Persona::find()->where(['tipo'=>'aspirante'])->asArray()->all(), 'cedula','nombres','apellidos');
    ?>
     <?= $form->field($model, 'cedula_atleta')->dropDownList($dataList,['cedula'=>'Nombres'.'Apellidos'])?>
    
     
        
     <?php $dataList=ArrayHelper::map(Curso::find()->asArray()->all(), 'id', 'nombre_curso');
    ?>
    <?= $form->field($model, 'curso_id')->dropDownList($dataList,['id'=>'Nombre'])?>

  
    
     <?php $dataList=ArrayHelper::map(Deporte::find()->asArray()->all(), 'id','nombre_deporte','tipo_deporte');
    ?>
    <?= $form->field($model, 'deporte_id')->dropDownList($dataList,['id'=>'nombre_deporte'.'tipo_deporte'])?>
   
     <?php $dataList=ArrayHelper::map(Persona::find()->where(['tipo'=>'entrenador'])->asArray()->all(), 'cedula', 'nombres','apellidos');
    ?>
    <?= $form->field($model, 'cedula_entrenador')->dropDownList($dataList,['cedula'=>'nombres'.'apellidos'])?>
    
         
        
        
       

   

    <?= $form->field($model, 'estado')->dropDownList(['promocinado'=>'promocionado',
            'evaluando'=>'evaluando',
            'ingresado'=>'ingresado',
            'egresado'=>'egresado',
            'expulsado'=>'expulsado',
        
        
        ]) ?>

        <?= $form->field($model, 'nivel')->dropDownList(['principiante'=>'principiante',
            'intermedio'=>'intermedio',
            'avanzado'=>'avanzado',
               ]) ?>
    

    <?= $form->field($model, 'ranking')->textInput() ?>

    <?= $form->field($model, 'escuela_procedencia')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'seleccionado')->checkbox($options=array('true'=>1,'false'=>0)) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
