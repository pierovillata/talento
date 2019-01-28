<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use kartik\widgets\TimePicker;
use app\models\Microciclo;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Sesion */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="sesion-form"></div>
<?php $form = ActiveForm::begin(); ?>


    <?php $dataList=ArrayHelper::map(Microciclo::find()->asArray()->all(), 'id_microciclo','id_microciclo','nombre_microciclo');?>

    <?= $form->field($model, 'microciclo_id')->dropDownList($dataList,['id_microciclo'=>'id_microciclo','nombre_microciclo'])?>
    
         

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 45]) ?>

   
    <?php echo '<label>Hora</label>';
            echo TimePicker::widget([
                 'model'=>$model,
            'attribute'=>'hora',
            'pluginOptions' => [
            'minuteStep' => 30,
            'showSeconds' => false,
            'showMeridian' => false
]
]);     ?>
  </p>
        <?= $form->field($model, 'fecha')->textInput(['maxlength' => 45]) ?>

     <?php  DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha',
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
]);    ?>

    <?= $form->field($model, 'tiempo_duracion')->textInput() ?>

    <?= $form->field($model, 'intensidad_media')->dropDownList(['Baja'=>'Baja','Media'=>'Media','Alta'=>'Alta',
        'Maxima'=>'Maxima']) ?>

    <?= $form->field($model, 'objetivos_sesion')->textarea(['maxlength' => 45]) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
