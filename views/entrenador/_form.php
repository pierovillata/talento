<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\TimePicker;
use yii\helpers\ArrayHelper;
use app\models\Persona;

/* @var $this yii\web\View */
/* @var $model app\models\Entrenador */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="entrenador-form"></div>
<?php $form = ActiveForm::begin(); ?>

    <?php $dataList=ArrayHelper::map(Persona::find()->where(['tipo'=>'entrenador'])->asArray()->all(), 'cedula', 'nombres','apellidos');
    ?>
    <?= $form->field($model, 'cedula_entrenador')->dropDownList($dataList,['cedula'=>'nombres'.'apellidos'])?>

    <?= $form->field($model, 'nivel')->dropDownList(['Principiante' => 'Principiante','Intermedio'=>'Intermedio','Avanzado'=>'Avanzado']) ?>

    <?= $form->field($model, 'tipo_entrenador')->dropDownList(['Contratado'=>'Contratado','Fijo'=>'Fijo']) ?>

    <?= $form->field($model, 'lugar_trabajo')->textInput(['value'=>'Polideportivo Cumana','maxlength' => 45]) ?>

    <?= $form->field($model, 'dias_trabajo')->textInput(['value'=>'Lunes a Viernes','maxlength' => 45]) ?>

     <?php echo '<label>Inicio Mañana</label>';
            echo TimePicker::widget([
                 'model'=>$model,
            'attribute'=>'hora_inicio_am',
            'pluginOptions' => [
            'minuteStep' => 30,
            'showSeconds' => false,
            'showMeridian' => false
]
]);     ?>

        <?php echo '<label>Final Mañana</label>';
            echo TimePicker::widget([
                 'model'=>$model,
            'attribute' => 'hora_final_am',
            'pluginOptions' => [
            'minuteStep' => 30,
            'showSeconds' => false,
            'showMeridian' => false
]
]);     ?>

        <?php echo '<label>Inicio Tarde</label>';
            echo TimePicker::widget([
                 'model'=>$model,
            'attribute' => 'hora_inicio_tarde',
            'pluginOptions' => [
            'minuteStep' => 30,
            'showSeconds' => false,
            'showMeridian' => false
]
]);     ?>


            <?php echo '<label>Final Tarde</label>';
            echo TimePicker::widget([
                'model'=>$model,
            'attribute' => 'hora_final_tarde',
            'pluginOptions' => [
            'minuteStep' => 30,
            'showSeconds' => false,
            'showMeridian' => false
]
]);     ?>



 
    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
