<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MicrocicloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Microciclos');
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="panel panel-info" style="width:auto">
  <div class="panel-heading"></div>
  <div class="panel-body">
   
    <div class="microciclo-index"></div>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Microciclo',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_microciclo',
            'mesociclo_id',
            'tipo_microciclo',
            'nombre_microciclo',
            'semana',
            // 'duracion_dias',
            // 'objetivos_microciclo',
            // 'volumen',
            // 'intensidad',
            // 'resistencia_aerobica',
            // 'resistencia_mixta',
            // 'resistencia_anaerobica',
            // 'velocidad',
            // 'fuerza_maxima',
            // 'fuerza_explosiva',
            // 'fuerza_resistencia',
            // 'tecnica',
            // 'tactica',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

   
  </div>
</div>
   


 
 



