<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resultado */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Resultado',
]) . ' ' . $model->idresultado;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resultados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idresultado, 'url' => ['view', 'id' => $model->idresultado]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="resultado-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


