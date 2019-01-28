<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Deporte;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Competencia */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="competencia-form"></div>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_competencia')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'lugar_competencia')->textInput(['maxlength' => 45]) ?>

      <?= $form->field($model, 'fecha_inicio')->textInput() ?>

        <?php  DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha_inicio',
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
]);    ?>
<?= $form->field($model, 'fecha_final')->textInput() ?>

  <?php  DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha_final',
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
]);    ?>
     <?php $dataList=ArrayHelper::map(Deporte::find()->asArray()->all(), 'nombre_deporte','nombre_deporte','tipo_deporte');
    ?>
    <?= $form->field($model, 'deporte')->dropDownList($dataList,['nombre_deporte'=>'nombre_deporte'.'tipo_deporte'])?>
   
    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
