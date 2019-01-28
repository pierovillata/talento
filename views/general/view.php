<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\General */

$this->title = $model->id_general;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Generales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="general-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_general], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_general], [
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
            'id_general',
            'cedula_atleta',
            'year',
            'tipo_prueba',
            'velocidad',
            'lanzamiento_balon',
            'carrera_distancia',
            'salto_vertical',
            'salto_horizontal',
            'agilidad',
            'flexibilidad',
            'observaciones_generales',
        ],
    ]) ?>

</div>



  </div>
</div>



