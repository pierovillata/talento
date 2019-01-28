<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Curso */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Curso',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cursos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="panel panel-default" style="width:auto">
  <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1></div>
  <div class="panel-body">
   <div class="curso-create">

    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
  </div>
</div>

   





