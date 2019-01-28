<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Plan */

$this->title = $model->id_plan;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="plan-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_plan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_plan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_plan',
            'ano_plan',
            'cedula_entrenador',
            'deporte',
            'objetivos_generales',
            'objetivos_especificos',
        ],
    ]) ?>

</div>



  </div>
</div>


