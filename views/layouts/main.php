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
    <div class="panel panel-info" style="width: auto">
        <div class="panel-heading">      
            <a class="navbar-brand" href="/talento/web/index.php">
        <img alt="Inicio" src="/talento/web/images/botoninicio.png">
      </a>
            <h2>Aplicacion Web Talentos Deportivos</h2>
        
        </div>
        <div class="panel-body" style="font-weight: bolder">
   <?php        
        
           
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

                    ['label'=>'Registrar Aspirante','url'=> ['site/aspirante']],
                    ['label'=>'Seleccion','url'=> ['/seleccion/index']],
                    ['label'=>'Protocolos','url'=> ['/protocolos/index']],
                    ['label'=>'Requisitos','url'=> ['/requisitos/index']],
                    
                    ]],

                    ['label'=>'Seleccion',

                    'items'=>[

                    ['label'=>'Ver Seleccionados','url'=> ['/seleccionados/index']],
                  

                    
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
