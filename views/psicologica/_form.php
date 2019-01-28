<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Persona;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Psicologica */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="psicologica-form"></div>
<?php $form = ActiveForm::begin(); ?>

    <?php $dataList=ArrayHelper::map(Persona::find()->where(['tipo'=>'aspirante'])->asArray()->all(), 'cedula','nombres','apellidos');
    ?>
     <?= $form->field($model, 'cedula_atleta')->dropDownList($dataList,['cedula'=>'Nombres'.'Apellidos'])?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'tipo_prueba')->dropDownList(['Seleccion'=>'Seleccion','Control'=>'Control']) ?>

    <?= $form->field($model, 'motivacion')->textInput() ?>

    <?= $form->field($model, 'descripcion_motivacion')->textarea(['maxlength' => 45]) ?>

    <?= $form->field($model, 'personalidad')->textInput() ?>

    <?= $form->field($model, 'descripcion_personalidad')->textarea(['maxlength' => 45]) ?>

    <?= $form->field($model, 'actitud')->textInput() ?>

    <?= $form->field($model, 'descripcion_actitud')->textarea(['maxlength' => 45]) ?>

    <?= $form->field($model, 'observaciones_psicologicas')->textarea(['maxlength' => 128]) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
