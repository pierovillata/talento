<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Entrenador */

$this->title = $model->cedula_entrenador;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Entrenadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   
   <div class="entrenador-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->cedula_entrenador], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->cedula_entrenador], [
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
            'cedula_entrenador',
            'nivel',
            'tipo_entrenador',
            'lugar_trabajo',
            'dias_trabajo',
            'hora_inicio_am',
            'hora_final_am',
            'hora_inicio_tarde',
            'hora_final_tarde',
        ],
    ]) ?>

</div>



  </div>
</div>



