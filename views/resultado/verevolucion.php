<?php
use app\models\Resultado;
use app\models\Evento;
use app\models\Competencia;
use app\models\Persona;
 use yii\grid\GridView;
  use yii\widgets\DetailView;
use yii\data\ActiveDataProvider;
?>

    <?php 
        
    
             $cedula=$model->cedula_atleta;
            $evento=$model2->nombre_evento;
            
            
        $persona=new Persona();
        $personamodel=$persona->findOne($cedula);?>
        
                 <div class="panel panel-success" style="width:auto">
                        <div class="panel-heading"><h2>EVOLUCION DEL ATLETA</h2></div>
                        <div class="panel-body">
                                El atleta <?php echo "<b>".$personamodel['apellidos']."</b>"."  "."<b>".$personamodel['nombres']."</b>"." ";?>
                                presenta una evolucion expresada en las siguientes tablas.
                            
                        </div></div>
                <div class="panel panel-primary" style="width:auto">
                        <div class="panel-heading"><h3>Atleta</h3></div>
              
                        <div class="panel-body">
                 <?php echo DetailView::widget([
                    'model' => $personamodel,
                    'attributes' => [
                        'cedula',
                        'apellidos',
                        'nombres',
                        'fecha_nacimiento',
                        'edad',
                        'sexo',

                            ],
                        ]) ;
                            ?>
                      </div>
                    </div>
          

   
         <?php
         
         $resultado=new Resultado();
         
         $listaresultados=(new \yii\db\Query())
                 ->from(['resultado a','evento b','competencia c'])
                 ->where(['a.cedula_atleta'=>$cedula,'b.nombre_evento'=>$evento])->all();
                 
                 
                 
         ?>
                    

                        <div class="panel panel-primary" style="width:auto">
                        <div class="panel-heading"><h3>Eventos</h3></div>
                        <div class="panel-body">
       
            
            <?php  foreach ($listaresultados as $value)
                 {
                    ?><div class="panel panel-info" style="width:auto">
                        <div class="panel-heading"><h5><?php echo "<b>".$value['nombre_competencia']."</b>"." (".$value['deporte'].")";?></h5></div>
                        <div class="panel-body">
                 <?php  echo DetailView::widget([
                    'model' => $value,
                    'attributes' => [
                        'cedula_atleta',
                        'nombre_evento',
                        'fecha',
                        'categoria',
                        'posicion',
                        'resultado',
                       

                            ],
                        ]) ;
                 ?> </div></div>
               <?php }
                  
                        
                 
                            ?>
                            
                            <div class="panel panel-success" style="width:auto">
                        <div class="panel-heading"><h2>Cambios realizados</h2></div>
                        <div class="panel-body">
                                El atleta <?php echo "<b>".$personamodel['apellidos']."</b>"."  "."<b>".$personamodel['nombres']."</b>"." ";?>
                                presenta los siguientes cambios de rendimiento deportivo expresados en las siguientes tablas.
                                
                               <?php $cambios= array();
                               $cantidad=count($listaresultados);
                               echo $cantidad;
 
                               
                               $i=0;
                               foreach($listaresultados as $value)
                               {
                                   $cambios[$i]=$value['resultado'];
                                   $i++;
                               }
                               
                               
                     
                               ?>
                                
                            
                        </div></div>
                      </div>
                    </div>
          

   
