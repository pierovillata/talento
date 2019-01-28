<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GeneralSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Generales');
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="panel panel-info" style="width:auto">
  <div class="panel-heading"></div>
  <div class="panel-body">
   
    <div class="general-index"></div>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'General',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_general',
            'cedula_atleta',
            'year',
            'tipo_prueba',
            'velocidad',
             //'lanzamiento_balon',
             'carrera_distancia',
             'salto_vertical',
             //'salto_horizontal',
             //'agilidad',
             //'flexibilidad',
            // 'observaciones_generales',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

   
  </div>
</div>
   


 
 



