<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Seleccionados;

/* @var $this yii\web\View */
/* @var $model app\models\Resultado */
/* @var $form ActiveForm */
?>

<div class="panel panel-info" style="width:auto">
    <div class="panel-heading"><h2>Modulo de selección de aspirantes</h2></div>
  <div class="panel-body">
   
  	
      <div class="general-seleccionar">
          
         
    <?php $form = ActiveForm::begin(); ?>
          <?php $model=new Seleccionados()?>
       

         

        
                    
         <?= $form->field($model,'year')?>
        <?= $form->field($model,'tipo_prueba')->dropDownList(['Seleccion'=>'Seleccion'])?>

                  
       
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
                    <?php echo $model->recomendacion;?>
   


  </div>
</div>

