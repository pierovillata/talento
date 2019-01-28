<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
     <img class="img-responsive" alt="banner" src="/talento/web/images/banner.png">
    
</head>

<body>
   
    <div class="panel panel-default" style="width: auto">
  <div class="panel-heading">
    
  <div class="panel-body">
    
      <?php 
            $this->beginBody() ?>
    <div class="panel panel-success" style="width: auto">
        <div class="panel-heading"> 
             <a class="navbar-brand" href="/talento/web/index.php">
        <img alt="Inicio" src="/talento/web/images/botoninicio.png">
      </a>
            <h3>Modulo del Doctor</h3>
        
        </div>
        <div class="panel-body" style="font-weight: bolder">
   <?php        
        
           /* NavBar::begin([
                'brandLabel' => 'Aplicacion Web Talentos Deportivos (AWTD)',
                'brandUrl' => Yii::$app->homeUrl,
                
                'options' => [
                    'class' => 'navbar navbar-info',
                ],
            ]);*/
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav  nav-pills navbar-justified '],
                

                'items' => [
                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label'=>'Nosotros','url'=>['/site/about']],


                    ['label'=>'Talento',

                    'items'=>[

                    ['label'=>'Formacion','url'=> ['/formacion/index']],
                    ['label'=>'Fases','url'=> ['/fases/index']],
                    
                    ]],

                    ['label'=>'Multimedia',

                    'items'=>[

                    ['label'=>'Videos','url'=> ['/multimedia/videos']],
                    ['label'=>'Fotos','url'=> ['/multimedia/fotos']],
                    ['label'=>'Descargas','url'=> ['/multimedia/index']],

                    
                    ]],

                    ['label'=>'Pruebas',

                    'items'=>[

                    ['label'=>'Registrar Aspirante','url'=> ['/site/aspirante']],
                    ['label'=>'Seleccion','url'=> ['/seleccion/index']],
                    ['label'=>'Protocolos','url'=> ['/protocolos/index']],
                    ['label'=>'Requisitos','url'=> ['/requisitos/index']],
                    
                    ]],

                    ['label'=>'Seleccion',

                    'items'=>[

                    ['label'=>'Ver Seleccionados','url'=> ['/seleccionados/index']],
                    ['label'=>'Resultados percentiles antropometricos','url'=> ['/antropometrica-percentil/index']],
                    ['label'=>'Resultados percentiles generales','url'=> ['/general-percentil/index']],

                    
                    ]],

                    ['label' => 'Contacto', 'url' => ['/site/contact']],

                    ['label'=>'Administración',

                    'items'=>[
                    ['label' => 'Coordinador', 'url' => ['/coordinador/index'], 'visible'=>!Yii::$app->user->isGuest],    
                    ['label' => 'Asistente', 'url' => ['/asistente/index'], 'visible'=>!Yii::$app->user->isGuest],
                    ['label' => 'Coach', 'url' => ['/coach/index'], 'visible'=>!Yii::$app->user->isGuest],
                    ['label' => 'Doctor', 'url' => ['/doctor/index'], 'visible'=>!Yii::$app->user->isGuest],
                    ['label' => 'Psicologo', 'url' => ['/psicologo/index'], 'visible'=>!Yii::$app->user->isGuest],
                    

                    
                        Yii::$app->user->isGuest ?
                        ['label' => 'Iniciar sesion', 'url' => ['/site/login']] :
                        
                        
                        ['label' => 'Cerrar Sesion (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],


                        ]],
                         
                         ['label'=>'Ayuda','url'=>['/ayuda/index']] ,  

                                   
                ],
            ]);
           /* NavBar::end();*/
        ?>     
         
            
            
            
            
      </div>
</div>
      <div class="panel panel-success" style="width:auto"> 
  <div class="panel-body"> 
    
    <ul class="nav nav-pills">
  <li ><a href="/talento/web/index.php/persona/index">
  <span class="glyphicon glyphicon-user"> Usuarios</span></a></li>
  
  
  
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      <span class="glyphicon glyphicon-user">Atletas </span> <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">

     
      <li ><a href="/talento/web/index.php/atleta/index">Gestionar Atletas</a></li>
      </li>
      
      
      

    </ul>
  </li>

  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
     <span class="glyphicon glyphicon-time">Pruebas </span> <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      
      
      <li ><a href="/talento/web/index.php/medica/index">Medicas</a></li>
      
      
      

    </ul>
  </li>


  


  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
     <span class="glyphicon glyphicon-signal"> Estadisticas</span>  <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li class="active"><a href="/talento/web/index.php/antropometrica/percentil">Calcular Percentiles Antropometricos</a></li>
      <li><a href="/talento/web/index.php/antropometrica-percentil/index">Ver Percentiles Antropometricos</a></li>
      <li><a href="/talento/web/index.php/general/percentil">Calcular Percentiles Generales</a></li>
      <li><a href="/talento/web/index.php/general-percentil/index">Ver Percentiles Generales</a></li>
       
      
        

    </ul>
  </li>
  
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
     <span class="glyphicon glyphicon-signal">Reportes </span>  <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li ><a href="/talento/web/index.php/reportico/">
        Modulo de Gestion de reportes</a></li>
      
        

    </ul>
  </li>
  
  
  
</ul>


  </div>
</div>
 



 
        
       
        
        
 <br style="color:black">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            
            
            <?= $content ?>
        </div>
    </div>

      <footer class="footer" style="font-weight: bold">
        <div class="container">
            <p class="pull-left ">&copy; UETD <?= date('Y') ?></p>
            <p class="pull-right">Producido por: Gian Piero Villata</p>
        </div>
    </footer>

<?php $this->endBody() ?>
      
  </div>
</div>

</body>
</html>
<?php $this->endPage() ?>
