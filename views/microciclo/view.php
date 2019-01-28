<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Microciclo */

$this->title = $model->id_microciclo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Microciclos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="microciclo-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_microciclo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_microciclo], [
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
            'id_microciclo',
            'mesociclo_id',
            'tipo_microciclo',
            'nombre_microciclo',
            'semana',
            'duracion_dias',
            'objetivos_microciclo',
            'volumen',
            'intensidad',
            'resistencia_aerobica',
            'resistencia_mixta',
            'resistencia_anaerobica',
            'velocidad',
            'fuerza_maxima',
            'fuerza_explosiva',
            'fuerza_resistencia',
            'tecnica',
            'tactica',
        ],
    ]) ?>

</div>



  </div>
</div>



