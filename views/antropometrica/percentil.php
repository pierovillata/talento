<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\app\models\Antropometrica;
use app\models\AntropometricaPercentil;

/* @var $this yii\web\View */
/* @var $model app\models\AntropometricaPercentil */
/* @var $form ActiveForm */
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h3>Calculo de percentiles antropometricos</h3></div>
  <div class="panel-body">
   
  		<div class="antropometrica-percentil">

      <?php $model2=new \app\models\Antropometrica();?>
                    <?php $model=new \app\models\AntropometricaPercentil();?>

    <?php $form = ActiveForm::begin(); ?>
       
        <?= $form->field($model2,'year')?>
        <?= $form->field($model2,'tipo_prueba')->dropDownList(['Seleccion'=>'Seleccion','Control'=>'Control'])?>

        
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-success']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- antropometrica-percentil -->



  </div>
</div>

