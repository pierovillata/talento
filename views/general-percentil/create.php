<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GeneralPercentil */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'General Percentil',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'General Percentils'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="panel panel-default" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="general-percentil-create">

    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
  </div>
</div>

   





