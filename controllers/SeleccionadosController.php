<?php

namespace app\controllers;

use Yii;
use app\models\Seleccionados;
use app\models\SeleccionadosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Antropometrica;
use app\models\General;
use app\models\AntropometricaPercentil;
use app\models\GeneralPercentil;

/**
 * SeleccionadosController implements the CRUD actions for Seleccionados model.
 */
class SeleccionadosController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Seleccionados models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SeleccionadosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Seleccionados model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Seleccionados model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Seleccionados();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cedula_atleta]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Seleccionados model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cedula_atleta]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Seleccionados model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Seleccionados model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Seleccionados the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Seleccionados::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

        public function actionSeleccionar()
    {
        
        $model=new Seleccionados();
       
       
        
        if($model->load(Yii::$app->request->post()))
        {
            
             $year=$model->year;
             $tipo=$model->tipo_prueba;
             
             $antro=new AntropometricaPercentil();
             $general=new GeneralPercentil();
             
            $listaantro=$antro->find()->from('antropometrica_percentil')->where(['year'=>$year,'tipo_prueba'=>$tipo])->asArray()->all();
            $listageneral=$general->find()->from('general_percentil')->where(['year'=>$year,'tipo_prueba'=>$tipo])->asArray()->all(); 
            
             $totalantro=$antro->find()->from('antropometrica_percentil')->where(['year'=>$year,'tipo_prueba'=>$tipo])->count();
            $totalgeneral=$general->find()->from('general_percentil')->where(['year'=>$year,'tipo_prueba'=>$tipo])->count();   
            
            
            if($totalgeneral==0 && $totalantro==0)
            { 
              $model->recomendacion="No existen registros en la BD para realizar la seleccion";
            
          
             return $this->render('seleccionar',['model'=>$model]);
            
            }
            else
            {
                
           $antropercentil=array();
                     foreach ($listaantro as $value) {
                         $total=$value['peso']+$value['altura_pie']+$value['altura_sentado']+
                                 $value['porcentaje_grasa']+$value['abertura'];
                         
                         
                        
                         
                       
                       if($value['peso']<80)
                       {
                        $mensaje1="El atleta puede ser bueno para deportes donde el peso mayor es un obstaculo(Marca)";
                       }
                       else
                       {
                        $mensaje1="";
                       }
                       
                       if($value['altura_pie']>80)
                       {
                         $mensaje2="El atleta puede ser bueno para deportes mayor altura es importante (Marca y Equipos)";
                       }
                       else
                       {
                        $mensaje2="";
                       }
                       
                       if($value['porcentaje_grasa']<80)
                       {
                         $mensaje3="El atleta puede ser bueno para deportes donde una menor altura es importante (Combate)";
                       }
                       else
                       {
                        $mensaje3="";
                       }
                       

                         
                        
                         $cedula=$value['cedula_atleta'];

                        $antropercentil[$cedula]=$total;
                        $mensajeantro[$cedula]=$mensaje1." ".$mensaje2. " ".$mensaje3." ";
                        
                        
                         
                     }

                  
                     
              $generalpercentil=array();
                     foreach ($listageneral as $value) {
                         $total2=$value['velocidad']+$value['carrera_distancia']+$value['lanzamiento_balon']+
                                 $value['salto_vertical']+$value['salto_horizontal']+$value['agilidad']+$value['flexibilidad'];
                        
                        
                         

                          if($value['velocidad']>80)
                       {
                        $mensaje1="El atleta puede ser bueno para deportes donde la velocidad es importante(Marca y Juegos)";
                       }
                       else
                       {
                        $mensaje1="";
                       }
                       
                       if($value['carrera_distancia']<80)
                       {
                         $mensaje2="El atleta puede ser bueno donde la resistencia es importante (Marca y Juegos)";
                       }
                       else
                       {
                        $mensaje2="";
                       }
                       
                       if($value['lanzamiento_balon']>80)
                       {
                         $mensaje3="El atleta puede bueno para deportes donde la fuerza explosiva de los brazos es importante (Combate, Juegos)";
                       }
                       else
                       {
                        $mensaje3="";
                       }
                       

                        if($value['salto_vertical']>80)
                       {
                         $mensaje4="El atleta puede bueno para deportes donde la fuerza explosiva de las piernas es importante (Combate,Juegos, Saltos)";
                       }
                       else
                       {
                        $mensaje4="";
                       }
                      
                       

                        if($value['salto_horizontal']>80)
                       {
                         $mensaje5="El atleta puede bueno para deportes donde la fuerza explosiva piernas es importante (Combate, Juegos, Saltos)";
                       }
                       else
                       {
                        $mensaje5="";
                       }
                       

                        if($value['agilidad']<80)
                       {
                         $mensaje6="El atleta puede bueno para deportes la agilidad y precision es importante (Arte, Juegos, )";
                       }
                       else
                       {
                        $mensaje6="";
                       }


                        if($value['flexibilidad']>80)
                       {
                         $mensaje7="El atleta puede bueno para deportes donde la fuerza explosiva de los brazos es importante (Combate, Juegos)";
                       }
                       else
                       {
                        $mensaje7="";
                       }
                       
                        $cedula=$value['cedula_atleta'];
                        $generalpercentil[$cedula]=$total2;
                       
                        
                        $mensajegeneral[$cedula]=$mensaje1." ".$mensaje2. " ".$mensaje3." ".$mensaje4." ".$mensaje5." ".$mensaje6." ".$mensaje7." ";
                       
                                       
                         
                     }
                      

                  $totalantro=count($antropercentil);
                  $totalgeneral=count($generalpercentil);
                 
               
                     
                   
                   $puntos=array();

                   foreach ($antropercentil as $key => $value) {
                       $puntos[$key]=$value+$generalpercentil[$key];
                   }
                  

                   foreach ($puntos as $key=>$value) {
                     
                         $seleccion=new Seleccionados();
                    

                            if($value>200)
                    {
                        $seleccion->tipo_prueba="Seleccion";
                        $seleccion->cedula_atleta=$key;
                        $seleccion->year=$year;
                        $seleccion->puntuacion=$value;
                        $seleccion->seleccionado="Si";
                        $seleccion->recomendacion=$mensajegeneral[$key].$mensajeantro[$key];
                        
                        if($seleccion->findOne($key))
                        {
                           $seleccion->delete();
                            $seleccion->update();

                        }
                        else
                        {
                            $seleccion->insert();
                        }
                        
                        }else
                        {

                        $seleccion->cedula_atleta=$key;
                        $seleccion->tipo_prueba="Seleccion";
                        $seleccion->year=$year;
                        $seleccion->puntuacion=$value;
                        $seleccion->seleccionado="No";
                        $seleccion->recomendacion="Usted no fue seleccionado";
                        
                        if($seleccion->findOne($key))
                        {
                            $seleccion->delete($key);
                            $seleccion->update();

                        }
                        else
                        {
                            $seleccion->insert();
                        }
                        
                         



                        }

                     

                       
                   }


                        



        }
          
               $searchModel = new SeleccionadosSearch();
                 $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);    

                  
                 
                
        }else
        {
          
          return $this->render('seleccionar',['model'=>$model]);
        }//fin del si
        
        
        
        
      
        
        
        
    }





}
