<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Curso */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="curso-form"></div>
<?php $form = ActiveForm::begin(['class'=>'horizontal'] ); ?>

    <?= $form->field($model, 'nombre_curso')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'seccion')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'turno')->dropDownList(['AM'=>'AM','PM'=>'PM']) ?>

    <?= $form->field($model, 'cupos')->textInput(['value'=>30]) ?>

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
