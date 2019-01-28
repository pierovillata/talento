<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MesocicloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mesociclos');
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="panel panel-info" style="width:auto">
  <div class="panel-heading"></div>
  <div class="panel-body">
   
    <div class="mesociclo-index"></div>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Mesociclo',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mesociclo',
            'macrociclo_id',
            'nombre_mesociclo',
            'tipo_mesociclo',
            'fecha_inicio',
            // 'fecha_final',
            // 'objetivos',
            // 'volumen',
            // 'intensidad',
            // 'porcentaje_resistencia_aerobica',
            // 'porcentaje_resistencia_anaerobica',
            // 'porcentaje_velocidad',
            // 'porcentaje_tecnica',
            // 'porcentaje_agilidad',
            // 'porcentaje_fuerza',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

   
  </div>
</div>
   


 
 



