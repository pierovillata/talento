<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
                    <div class="panel panel-primary" style="width:auto">
                        <div class="panel-heading"><h5>Atleta</h5></div>
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
                 ->where(['=','a.cedula_atleta',$cedula])->all();
         ?>
                    <div class="panel panel-primary" style="width:auto">
                        <div class="panel-heading"><h5>Eventos</h5></div>
                        <div class="panel-body">
       
            
            <?php  foreach ($listaresultados as $value)
                 {
                    ?><div class="panel panel-info" style="width:auto">
                        <div class="panel-heading"><h5><?php echo $value['nombre_competencia']." (".$value['deporte'].")";?></h5></div>
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
                      </div>
                    </div>
          

   
         <?php
            