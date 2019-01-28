<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Persona;

/* @var $this yii\web\View */
/* @var $model app\models\Deporte */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info" style="width:auto">
  <div class="panel-heading">

<div class="deporte-form"></div>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_deporte')->textInput(['maxlength' => 45]) ?>

    <?php $dataList=ArrayHelper::map(Persona::find()->where(['tipo'=>'entrenador'])->asArray()->all(),'nombres','nombres','apellidos');
    ?>
    <?= $form->field($model, 'representante')->dropDownList($dataList,['apellidos'.'nombres'=>'nombres'.'apellidos'])?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'tipo_deporte')->dropDownList(['Evaluacion'=>'Evaluacion','Marca'=>'Marca',
        
        'Combate'=>'Combate',
        'Arte'=>'Arte',
        'Equipo'=>'Equipo',
        'Precision'=>'Precision'
        
        ]) ?>

   



       
    

    


  </div>
  <div class="panel-body">
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>
    	
    






   

    
