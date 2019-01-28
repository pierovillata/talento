<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Sesion;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Contenido */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="contenido-form"></div>
<?php $form = ActiveForm::begin(); ?>

     <?php $dataList=ArrayHelper::map(Sesion::find()->asArray()->all(), 'id_sesion','id_sesion','nombre');?>

    <?= $form->field($model, 'sesion_id')->dropDownList($dataList,['id_sesion'=>'id_sesion','nombre'])?>
    
    
    <?= $form->field($model, 'calentamiento')->textarea(['maxlength' => 255]) ?>

    <?= $form->field($model, 'parte_principal')->textarea(['maxlength' => 255]) ?>

    <?= $form->field($model, 'parte_final')->textarea(['maxlength' => 255]) ?>

    <?= $form->field($model, 'observaciones')->textarea(['maxlength' => 45]) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
