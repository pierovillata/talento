<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Competencia */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Competencia',
]) . ' ' . $model->idcompetencia;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Competencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcompetencia, 'url' => ['view', 'id' => $model->idcompetencia]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="competencia-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


