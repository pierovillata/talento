<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Evento;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\resultado */
/* @var $form ActiveForm */
?>

<div class="panel panel-info" style="width:auto">
    <div class="panel-heading"><h3>Evolucion del atleta</h3></div>
  <div class="panel-body">
   
  		<div class="resultado-evolucion">

    <?php $form = ActiveForm::begin(); ?>
       <?php $model2=new Evento();?>
                    
        <?= $form->field($model, 'cedula_atleta') ?>
                    
     <?php $dataList=ArrayHelper::map(Evento::find()->asArray()->all(), 'nombre_evento', 'nombre_evento');
    ?>
     <?= $form->field($model2, 'nombre_evento')->dropDownList($dataList,['nombre_evento'=>'nombre_evento'])?>
       
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- resultado-evolucion -->



  </div>
</div>

