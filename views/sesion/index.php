<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SesionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Sesions');
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="panel panel-info" style="width:auto">
  <div class="panel-heading"></div>
  <div class="panel-body">
   
    <div class="sesion-index"></div>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Sesion',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sesion',
            'microciclo_id',
            'nombre',
            'hora',
            'fecha',
            // 'tiempo_duracion',
            // 'intensidad_media',
            // 'objetivos_sesion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

   
  </div>
</div>
   


 
 



