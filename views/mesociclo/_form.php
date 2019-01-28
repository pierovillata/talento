<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Macrociclo;
/* @var $this yii\web\View */
/* @var $model app\models\Mesociclo */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="mesociclo-form"></div>
<?php $form = ActiveForm::begin(); ?>


     <?php $dataList=ArrayHelper::map(Macrociclo::find()->asArray()->all(), 'id_macrociclo','id_macrociclo','tipo_macrociclo');?>

    <?= $form->field($model, 'macrociclo_id')->dropDownList($dataList,['id_macrociclo'=>'id_macrociclo','tipo_macrociclo'])?>
    
          

    <?= $form->field($model, 'nombre_mesociclo')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'tipo_mesociclo')->dropDownList(['Introductorio'=>'Introductorio', 'Fundamental'=>'Fundamental',
        'Estabilizador'=>'Estabilizador',
        'Control'=>'Control',
       
        'Pre-competitivo'=>'Pre-competitivo',
        'Comptetitivo'=>'Comptetitivo',
        'Recuperacion'=>'Recuperacion',        
        'Acumulacion'=>'Acumulacion',
        'Transformacion'=>'Tranformacion',
        'Realizacion'=>'Realizacion',
        ]) ?>

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

    <?= $form->field($model, 'volumen')->textInput() ?>

    <?= $form->field($model, 'intensidad')->dropDownList(['Baja'=>'Baja','Media'=>'Media','Alta'=>'Alta',
        'Maxima'=>'Maxima']) ?>

    <?= $form->field($model, 'porcentaje_resistencia_aerobica')->textInput() ?>

    <?= $form->field($model, 'porcentaje_resistencia_anaerobica')->textInput() ?>

    <?= $form->field($model, 'porcentaje_velocidad')->textInput() ?>

    <?= $form->field($model, 'porcentaje_tecnica')->textInput() ?>

    <?= $form->field($model, 'porcentaje_agilidad')->textInput() ?>

    <?= $form->field($model, 'porcentaje_fuerza')->textInput() ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
