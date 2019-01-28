<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Psicologica */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Psicologica',
]) . ' ' . $model->id_psicologia;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Psicologicas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_psicologia, 'url' => ['view', 'id' => $model->id_psicologia]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="psicologica-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


