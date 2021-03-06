<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AntropometricaPercentil */

$this->title = $model->id_prueba_antropometrica;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Antropometrica Percentils'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="antropometrica-percentil-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_prueba_antropometrica], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_prueba_antropometrica], [
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
            'id_prueba_antropometrica',
            'cedula_atleta',
            'year',
            'tipo_prueba',
            'peso',
            'altura_pie',
            'altura_sentado',
            'abertura',
            'porcentaje_grasa',
        ],
    ]) ?>

</div>



  </div>
</div>



