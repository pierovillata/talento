<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Macrociclo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Macrociclo',
]) . ' ' . $model->id_macrociclo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Macrociclos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_macrociclo, 'url' => ['view', 'id' => $model->id_macrociclo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="macrociclo-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
  </div>
</div>


