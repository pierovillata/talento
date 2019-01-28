<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\General */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'General',
]) . ' ' . $model->id_general;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Generales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_general, 'url' => ['view', 'id' => $model->id_general]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="general-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


