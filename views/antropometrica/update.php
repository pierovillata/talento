<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Antropometrica */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Antropometrica',
]) . ' ' . $model->id_antropometrica;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Antropometricas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_antropometrica, 'url' => ['view', 'id' => $model->id_antropometrica]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="antropometrica-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


