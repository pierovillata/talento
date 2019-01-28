<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Evento',
]) . ' ' . $model->idevento;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Eventos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idevento, 'url' => ['view', 'id' => $model->idevento]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="evento-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


