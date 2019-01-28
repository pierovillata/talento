<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Atleta */

$this->title = $model->cedula_atleta;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Atletas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="atleta-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->cedula_atleta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->cedula_atleta], [
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
            'cedula_atleta',
            'curso_id',
            'deporte_id',
            'cedula_entrenador',
            'estado',
            'nivel',
            'ranking',
            'escuela_procedencia',
            'seleccionado',
        ],
    ]) ?>

</div>



  </div>
</div>



