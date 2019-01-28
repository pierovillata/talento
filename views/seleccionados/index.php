<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SeleccionadosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Seleccionados');
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="panel panel-info" style="width:auto">
  <div class="panel-heading"><h3>Listado de seleccionados</h3></div>
  <div class="panel-body">
   
    <div class="seleccionados-index"></div>

    
    <?php /* echo $this->render('_search', ['model' => $searchModel]);*/ ?>

    <p>
        <?php /* Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Seleccionados',
]), ['create'], ['class' => 'btn btn-success']) */?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cedula_atleta',
            'year',
            'tipo_prueba',
            'puntuacion',
            'seleccionado:ntext',
            // 'recomendacion:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

   
  </div>
</div>
   


 
 



