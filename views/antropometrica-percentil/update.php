<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AntropometricaPercentil */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Antropometrica Percentil',
]) . ' ' . $model->id_prueba_antropometrica;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Antropometrica Percentils'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_prueba_antropometrica, 'url' => ['view', 'id' => $model->id_prueba_antropometrica]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="antropometrica-percentil-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


