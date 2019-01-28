<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Psicologica */

$this->title = $model->id_psicologia;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Psicologicas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="psicologica-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_psicologia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_psicologia], [
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
            'id_psicologia',
            'cedula_atleta',
            'year',
            'tipo_prueba',
            'motivacion',
            'descripcion_motivacion',
            'personalidad',
            'descripcion_personalidad',
            'actitud',
            'descripcion_actitud',
            'observaciones_psicologicas',
        ],
    ]) ?>

</div>



  </div>
</div>



