<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Entrenador */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Entrenador',
]) . ' ' . $model->cedula_entrenador;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Entrenadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cedula_entrenador, 'url' => ['view', 'id' => $model->cedula_entrenador]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="entrenador-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


