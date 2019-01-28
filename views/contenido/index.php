<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContenidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Contenidos');
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="panel panel-info" style="width:auto">
  <div class="panel-heading"></div>
  <div class="panel-body">
   
    <div class="contenido-index"></div>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Contenido',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcontenido',
            'sesion_id',
            'calentamiento',
            'parte_principal',
            'parte_final',
            // 'observaciones',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

   
  </div>
</div>
   


 
 



