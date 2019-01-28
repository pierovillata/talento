<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Medica */

$this->title = $model->id_medica;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Medicas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="medica-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_medica], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_medica], [
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
            'id_medica',
            'cedula_atleta',
            'tipo_prueba',
            'year',
            'hemoglobina',
            'vcm',
            'globulos_rojos',
            'globulos_blancos',
            'glucosa',
            'urea',
            'creatinina',
            'colesterol',
            'hdl',
            'ldl',
            'trigliceridos',
            'frecuencia_cardiaca_reposo',
            'frecuencia_cardiaca_maxima',
            'porcentaje_fibras_blancas',
            'porcentaje_fibras_rojas',
            'reflejos',
            'estado_general',
        ],
    ]) ?>

</div>



  </div>
</div>



