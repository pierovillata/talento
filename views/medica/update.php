<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Medica */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Medica',
]) . ' ' . $model->id_medica;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Medicas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_medica, 'url' => ['view', 'id' => $model->id_medica]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="medica-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


