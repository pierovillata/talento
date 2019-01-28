<?php
/* @var $this yii\web\View */
?>

<div class="panel panel-default" style="width:auto">
  <div class="panel-heading">
  <h3>Fases de seleccion</h3></div>
  <img src="/talento/web/images/seleccion.jpg" class="img-thumbnail" class="img-responsive" alt="Responsive image">
  <div class="panel-body">
    
  </div>
</div>


<?php use yii\bootstrap\Collapse;?>
<?php echo Collapse::widget([
    'items' => [
        // equivalent to the above
        [
            'label' => 'Fase de promocion (Abril)',
            'content' => '<p align="justify">En esta fase se hacen publicíones, propagandas, reuniones
    para dar a conocer la ejecución de las pruebas de admisión. En esta fase se debe tener la identificación de
    posibles talentos  en programas y proyectos de escuelas, centros deportivos publicos y privados, en las comunidades 
    a través de promotores, entrenadores, preparadores fisicos y cualquier persona calificada relacionada
    con el medio deportivo </p>',
            // open its content by default
            'contentOptions' => ['class' => 'in'],
            'options' => ['class'=>'panel-success'],
            
        ],
        // another group item
        [
            'label' => 'Fase de pruebas fisicas (Abril-Mayo)',
            'content' => '<p align="justify">Debe contemplar la fase de preparacion, ejecución y rcolección de datos 
    de las principales pruebas fisicas a realizar, asi como el procesamiento de los datos obtenidos </p>',
            'contentOptions' => [],
            'options' => ['class'=>'panel-info'],
        ],
        [
            'label' => 'Fase de resultados generales y comienzo de pruebas especificas (Mayo)',
            'content' => '<p align="justify">En esta fase se publican los primeros resultados de las pruebas generales y antropometricas, se seleccionan los mejores
    a las pruebas especificas en el deporte indicado. En esta fase los entrenadores se encargan del control por un periodo
    deteminado para al final aplicar los puntajes en las capacidades basicas de el deporte </p>',
            // open its content by default
            'contentOptions' => ['class' => 'in'],
            'options' => ['class'=>'panel-primary'],
        ],
        [
            'label' => 'Fase de observacion deportiva y pruebas de apoyo (Mayo-Julio)',
            'content' => '<p align="justify"> En esta fase se aplica un programa inicial de entrenamiento y seguimiento
    de las principales capacidades del deporte. Ademas se aplican las pruebas medicas complementarias y psicologicas que sirven de referencias
    para las demas pruebas aplicadas</p>',
            // open its content by default
            'contentOptions' => ['class' => 'in'],
            'options' => ['class'=>'panel-success'],
        ],
        [
            'label' => 'Inscripción definitiva (Septiembre)',
            'content' => '<p align="justify">Esta fase contempla el registro definitivo del aspirante
    y pasa a formar parte de la Intitucion.</p>',
            // open its content by default
            'contentOptions' => ['class' => 'in'],
            'options' => ['class'=>'panel-info'],
        ],
    ]
]);?>