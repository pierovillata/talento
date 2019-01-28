<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mesociclo */

$this->title = $model->id_mesociclo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mesociclos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="mesociclo-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_mesociclo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_mesociclo], [
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
            'id_mesociclo',
            'macrociclo_id',
            'nombre_mesociclo',
            'tipo_mesociclo',
            'fecha_inicio',
            'fecha_final',
            'objetivos',
            'volumen',
            'intensidad',
            'porcentaje_resistencia_aerobica',
            'porcentaje_resistencia_anaerobica',
            'porcentaje_velocidad',
            'porcentaje_tecnica',
            'porcentaje_agilidad',
            'porcentaje_fuerza',
        ],
    ]) ?>

</div>



  </div>
</div>



