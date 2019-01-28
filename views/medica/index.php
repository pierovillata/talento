<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MedicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Medicas');
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="panel panel-info" style="width:auto">
  <div class="panel-heading"></div>
  <div class="panel-body">
   
    <div class="medica-index"></div>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Medica',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_medica',
            'cedula_atleta',
            'tipo_prueba',
            'year',
            'hemoglobina',
            // 'vcm',
            // 'globulos_rojos',
            // 'globulos_blancos',
            // 'glucosa',
            // 'urea',
            // 'creatinina',
            // 'colesterol',
            // 'hdl',
            // 'ldl',
            // 'trigliceridos',
            // 'frecuencia_cardiaca_reposo',
            // 'frecuencia_cardiaca_maxima',
            // 'porcentaje_fibras_blancas',
            // 'porcentaje_fibras_rojas',
            // 'reflejos',
            // 'estado_general',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

   
  </div>
</div>
   


 
 



