<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Antropometrica */

$this->title = $model->id_antropometrica;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Antropometricas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="antropometrica-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_antropometrica], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_antropometrica], [
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
            'id_antropometrica',
            'cedula_atleta',
            'tipo_prueba',
            'year',
            'peso',
            'altura_pie',
            'altura_sentado',
            'indice_cormico',
            'diametro_cintura',
            'porcentaje_grasa',
            'peso_magro',
            'circunferencias_cadera',
            'circunferencia_brazo',
            'circunferencia_pectoral',
            'abertura',
            'longitud_pie',
            'longitud_mano',
            'somatotipo',
            'observaciones_antropometricas',
        ],
    ]) ?>

</div>



  </div>
</div>



