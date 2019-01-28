<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EntrenadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Entrenadors');
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="panel panel-info" style="width:auto">
  <div class="panel-heading"></div>
  <div class="panel-body">
   
    <div class="entrenador-index"></div>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Gestionar {modelClass}', [
    'modelClass' => 'Entrenador',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cedula_entrenador',
            'nivel',
            'tipo_entrenador',
            'lugar_trabajo',
            'dias_trabajo',
            // 'hora_inicio_am',
            // 'hora_final_am',
            // 'hora_inicio_tarde',
            // 'hora_final_tarde',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

   
  </div>
</div>
   


 
 



