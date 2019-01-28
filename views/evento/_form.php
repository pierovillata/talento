<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use app\models\Competencia;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="evento-form"></div>
<?php $form = ActiveForm::begin(); ?>


     <?php $dataList=ArrayHelper::map(Competencia::find()->asArray()->all(), 'idcompetencia','idcompetencia','nombre_competencia');?>

    <?= $form->field($model, 'id_competencia')->dropDownList($dataList,['idcompetencia'=>'idcompetencia','nombre_competencia'])?>
    
            
    <?= $form->field($model, 'nombre_evento')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>
      <?php  DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha',
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
]);    ?>
    <?= $form->field($model, 'categoria')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'participantes')->textInput(['maxlength' => 45]) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
