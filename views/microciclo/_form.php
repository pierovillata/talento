<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Mesociclo;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Microciclo */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="microciclo-form"></div>
<?php $form = ActiveForm::begin(); ?>

     <?php $dataList=ArrayHelper::map(Mesociclo::find()->asArray()->all(), 'id_mesociclo','id_mesociclo','nombre_mesociclo');?>

    <?= $form->field($model, 'mesociclo_id')->dropDownList($dataList,['id_mesociclo'=>'id_mesociclo','nombre_mesociclo'])?>

       

    <?= $form->field($model, 'tipo_microciclo')->dropDownList(['Ajuste'=>'Ajuste','Carga'=>'Carga','Impacto'=>'Impacto',
        'Aproximacion'=>'Aproximacion','Competicion'=>'Competicion','Recuperacion'=>'Recuperacion'
        ]) ?>

    <?= $form->field($model, 'nombre_microciclo')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'semana')->textInput() ?>

    <?= $form->field($model, 'duracion_dias')->textInput() ?>

    <?= $form->field($model, 'objetivos_microciclo')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volumen')->textInput() ?>

    <?= $form->field($model, 'intensidad')->dropDownList(['Baja'=>'Baja','Media'=>'Media','Alta'=>'Alta',
        'Maxima'=>'Maxima']) ?>

    <?= $form->field($model, 'resistencia_aerobica')->textInput() ?>

    <?= $form->field($model, 'resistencia_mixta')->textInput() ?>

    <?= $form->field($model, 'resistencia_anaerobica')->textInput() ?>

    <?= $form->field($model, 'velocidad')->textInput() ?>

    <?= $form->field($model, 'fuerza_maxima')->textInput() ?>

    <?= $form->field($model, 'fuerza_explosiva')->textInput() ?>

    <?= $form->field($model, 'fuerza_resistencia')->textInput() ?>

    <?= $form->field($model, 'tecnica')->textInput() ?>

    <?= $form->field($model, 'tactica')->textInput() ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
