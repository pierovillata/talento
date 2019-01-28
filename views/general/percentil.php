<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\models\General;
use app\models\GeneralPercentil;

/* @var $this yii\web\View */
/* @var $model app\models\AntropometricaPercentil */
/* @var $form ActiveForm */
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h3>Calculo de percentiles generales</h3></div>
  <div class="panel-body">
   
  		<div class="general-percentil">

      <?php $model2=new \app\models\General();?>
      <?php $model=new \app\models\GeneralPercentil();?>

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

