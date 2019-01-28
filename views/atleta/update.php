<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atleta */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Atleta',
]) . ' ' . $model->cedula_atleta;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Atletas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cedula_atleta, 'url' => ['view', 'id' => $model->cedula_atleta]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="atleta-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


