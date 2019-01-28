<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Persona;
use app\models\Evento;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Resultado */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="resultado-form"></div>
<?php $form = ActiveForm::begin(); ?>

    <?php $dataList=ArrayHelper::map(Persona::find()->where(['tipo'=>'aspirante'])->asArray()->all(), 'cedula','nombres','apellidos');
    ?>
     <?= $form->field($model, 'cedula_atleta')->dropDownList($dataList,['cedula'=>'Nombres'.'Apellidos'])?>

    <?php $dataList=ArrayHelper::map(Evento::find()->asArray()->all(), 'idevento','nombre_evento');
    ?>
     <?= $form->field($model, 'idevento')->dropDownList($dataList,['idevento'=>'Nombre Evento'])?>

    <?= $form->field($model, 'posicion')->textInput() ?>

    <?= $form->field($model, 'resultado')->textInput(['maxlength' => 45]) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
