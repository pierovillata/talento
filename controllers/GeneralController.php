<?php

namespace app\controllers;

use Yii;
use app\models\Antropometrica;
use app\models\GeneralPercentil;
use app\models\GeneralPercentilSearch;
use app\models\AntropometricaPercentil;
use app\models\General;
use app\models\GeneralSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GeneralController implements the CRUD actions for General model.
 */
class GeneralController extends Controller {

    public $layout = "asistente";

    public function behaviors() {
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
     * Lists all General models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new GeneralSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

   
    public function actionPercentil()
            
    {
        $model= new General();
		
		if ($model->load(Yii::$app->request->post())) {
                    $year=$model->year;
                    $tipo=$model->tipo_prueba;
                    
                    $general=new General();                   
                    
                    
                   $listageneral=$general->find()->from('general')->filterWhere(['year'=>$year,'tipo_prueba'=>$tipo])->asArray()->all();
                   $totalgeneral=$general->find()->from('general')->filterWhere(['year'=>$year,'tipo_prueba'=>$tipo])->asArray()->count();
                   
                   if($totalgeneral>0) 
                   {
                        foreach ($listageneral as $valor)
                   {
                    $generalpercentil=new GeneralPercentil();   
                   
                        
                        if(!$generalpercentil->findOne($valor['id_general']))
                        {
                      
                        $generalpercentil->id_prueba_general=$valor['id_general'];
                        $generalpercentil->cedula_atleta=$valor['cedula_atleta'];
                        $generalpercentil->year=$year;
                        $generalpercentil->tipo_prueba=$tipo;                       
                        $generalpercentil->velocidad=$general->calcularPercentil('velocidad', $valor['velocidad'],'general', $year, $tipo);
                        $generalpercentil->lanzamiento_balon=$general->calcularPercentil('lanzamiento_balon', $valor['lanzamiento_balon'],'general', $year, $tipo);
                        $generalpercentil->carrera_distancia=$general->calcularPercentil('carrera_distancia', $valor['carrera_distancia'],'general', $year, $tipo);
                        $generalpercentil->salto_horizontal=$general->calcularPercentil('salto_horizontal', $valor['salto_horizontal'],'general', $year, $tipo);
                        $generalpercentil->salto_vertical=$general->calcularPercentil('salto_vertical', $valor['salto_vertical'],'general', $year, $tipo);
                        $generalpercentil->agilidad=$general->calcularPercentil('agilidad', $valor['agilidad'],'general', $year, $tipo);
                        $generalpercentil->flexibilidad=$general->calcularPercentil('flexibilidad', $valor['flexibilidad'],'general', $year, $tipo);
                        
                        $generalpercentil->insert();
                        }
                        else
                        {
                         $generalpercentil->id_prueba_general=$valor['id_general'];
                        $generalpercentil->cedula_atleta=$valor['cedula_atleta'];
                       $generalpercentil->year=$year;
                        $generalpercentil->tipo_prueba=$tipo;  
                         
                        $generalpercentil->velocidad=$general->calcularPercentil('velocidad', $valor['velocidad'],'general', $year, $tipo);
                        $generalpercentil->lanzamiento_balon=$general->calcularPercentil('lanzamiento_balon', $valor['lanzamiento_balon'],'general', $year, $tipo);
                        $generalpercentil->carrera_distancia=$general->calcularPercentil('carrera_distancia', $valor['carrera_distancia'],'general', $year, $tipo);
                        $generalpercentil->salto_horizontal=$general->calcularPercentil('salto_horizontal', $valor['salto_horizontal'],'general', $year, $tipo);
                        $generalpercentil->salto_vertical=$general->calcularPercentil('salto_vertical', $valor['salto_vertical'],'general', $year, $tipo);
                        $generalpercentil->agilidad=$general->calcularPercentil('agilidad', $valor['agilidad'],'general', $year, $tipo);
                        $generalpercentil->flexibilidad=$general->calcularPercentil('flexibilidad', $valor['flexibilidad'],'general', $year, $tipo);
                            $generalpercentil->delete();
                            $generalpercentil->update();
                        }
                        
                        

                      
                     
                   } 
                      $searchModel = new GeneralPercentilSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                            return $this->render('/general-percentil/index', [
                                'searchModel' => $searchModel,
                                'dataProvider' => $dataProvider,
                            ]);  
                   
                   }else
                   {
                       echo "No existen suficientes registros para realizar el calculo de percentiles";
                   }
                    
                    
                    
                    
            //return $this->redirect(['view', 'id' => $model->id_antropometrica]);
        } else {
            return $this->render('percentil', [
                'model' => $model,
            ]);
        }
        
    }    
    
    
    
    
    
    
 
    
    
    
    
    
    public function actionSeleccionar() { // algoritmo de seleccion de talentos
       
        $general = new General();

        $antropometrica = new Antropometrica();

        if ($general->load(Yii::$app->request->post())) {

            $year = $general->year;
            $tipo_prueba = $general->tipo_prueba;



            $antropercentil = new AntropometricaPercentil();
            $antro = new Antropometrica();

            $listaantropercentil = $antropercentil->find()->from('antropometrica_percentil')->asArray()->all();
            $antropometrica = $antropercentil->find()->from('antropometrica_percentil')->asArray()->all();




            foreach ($listaantropercentil as $value) {

                if ($value['peso'] > 90) {
                    
                    $mensaje = "El aspirante tiene buen peso, esta indicado para deportes donde el peso corporal es"
                            . "dominantes como deportes de combate (karate, boxeo, judo, etc) y su valor es:";

                    echo $mensaje;echo $value['peso']."<br>";
                }
                if ($value['altura_pie'] > 90) {
                    $mensaje = "El aspirante tiene buena altura,esta indicado para deportes"
                            . " como deportes de saltos, voleiball, baloncesto, entre otros y su valor es: ";
                    echo $mensaje;echo $value['altura_pie']."<br>";
                }
                if ($value['porcentaje_grasa'] > 90) {
                    $mensaje = "El aspirante tiene buena grasa, esta indicado para deporte de fuerza (levantamiento de pesas) entre otros, y su valor es: ";
                    echo $mensaje;echo $value['porcentaje_grasa']."<br>";
                }
            }
        } else {
            return $this->render('seleccionar', []);
        }
    }

    /**
     * Displays a single General model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new General model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new General();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_general]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing General model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_general]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing General model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the General model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return General the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = General::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
