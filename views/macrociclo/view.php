<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Macrociclo */

$this->title = $model->id_macrociclo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Macrociclos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="macrociclo-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_macrociclo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_macrociclo], [
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
            'id_macrociclo',
            'id_plan',
            'tipo_macrociclo',
            'numero_semanas',
            'fecha_inicio',
            'fecha_final',
            'objetivos',
            'competiciones',
            'horas_totales',
            'preparacion_fisica',
            'preparacion_tecnica',
            'preparacion_tactica',
            'preparacion_psicologica',
            'estado_macrociclo',
        ],
    ]) ?>

</div>



  </div>
</div>



