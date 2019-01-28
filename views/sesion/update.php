<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sesion */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sesion',
]) . ' ' . $model->id_sesion;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sesions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sesion, 'url' => ['view', 'id' => $model->id_sesion]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="sesion-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


