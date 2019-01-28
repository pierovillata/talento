<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AntropometricaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Antropometricas');
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h3>Listado de registros antropometricos</h3></div>
  <div class="panel-body">
   
    <div class="antropometrica-index"></div>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Antropometrica',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_antropometrica',
            'cedula_atleta',
            'tipo_prueba',
            'year',
            'peso',
             'altura_pie',
             'altura_sentado',
            // 'indice_cormico',
            // 'diametro_cintura',
            'porcentaje_grasa',
            // 'peso_magro',
            // 'circunferencias_cadera',
            // 'circunferencia_brazo',
            // 'circunferencia_pectoral',
             'abertura',
            // 'longitud_pie',
            // 'longitud_mano',
            // 'somatotipo',
            // 'observaciones_antropometricas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

   
  </div>
</div>
   


 
 



