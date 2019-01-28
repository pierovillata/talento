<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use app\models\Plan;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Macrociclo */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="macrociclo-form"></div>
<?php $form = ActiveForm::begin(); ?>


     <?php $dataList=ArrayHelper::map(Plan::find()->asArray()->all(), 'id_plan','id_plan','ano_plan');?>

    <?= $form->field($model, 'id_plan')->dropDownList($dataList,['id_plan'=>'id_plan'.'ano_plan'])?>
    
    
    <?= $form->field($model, 'tipo_macrociclo')->dropDownList(['Tradicional'=>'Tradicional','Contemporaneo'=>'Contemporaneo']) ?>

    <?= $form->field($model, 'numero_semanas')->textInput() ?>

     <?= $form->field($model, 'fecha_inicio')->textInput(['maxlength' => 45]) ?>

     <?php  DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha_inicio',
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
]);    ?>

    <?= $form->field($model, 'fecha_final')->textInput(['maxlength' => 45]) ?>

     <?php  DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha_final',
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
]);    ?>


    <?= $form->field($model, 'objetivos')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'competiciones')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'horas_totales')->textInput() ?>

    <?= $form->field($model, 'preparacion_fisica')->textInput() ?>

    <?= $form->field($model, 'preparacion_tecnica')->textInput() ?>

    <?= $form->field($model, 'preparacion_tactica')->textInput() ?>

    <?= $form->field($model, 'preparacion_psicologica')->textInput() ?>

    <?= $form->field($model, 'estado_macrociclo')->dropDownList(['Entregado'=>'Entregado','Aprobado' =>'Aprobado']) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
