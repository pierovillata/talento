<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mesociclo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mesociclo',
]) . ' ' . $model->id_mesociclo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mesociclos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mesociclo, 'url' => ['view', 'id' => $model->id_mesociclo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="mesociclo-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


