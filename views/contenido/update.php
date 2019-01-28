<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contenido */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Contenido',
]) . ' ' . $model->idcontenido;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contenidos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcontenido, 'url' => ['view', 'id' => $model->idcontenido]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="contenido-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


