<?php

namespace app\controllers;

use Yii;
use app\models\Antropometrica;
use app\models\AntropometricaPercentil;
use app\models\AntropometricaPercentilSearch;
use app\models\AntropometricaSearch;
use app\controllers\AntropometricaController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AntropometricaController implements the CRUD actions for Antropometrica model.
 */
class AntropometricaController extends Controller
{
    
    public $layout='asistente';
    
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
     * Lists all Antropometrica models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AntropometricaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Antropometrica model.
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
     * Creates a new Antropometrica model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Antropometrica();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_antropometrica]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Antropometrica model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_antropometrica]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Antropometrica model.
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
     * Finds the Antropometrica model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Antropometrica the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Antropometrica::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionPercentil()
            
    {
        $model= new Antropometrica();
		
		if ($model->load(Yii::$app->request->post())) {
                    $year=$model->year;
                    $tipo=$model->tipo_prueba;
                    
                    $antro=new Antropometrica();                   
                    
                    
                   $listaantro=$antro->find()->from('antropometrica')->filterWhere(['year'=>$year,'tipo_prueba'=>$tipo])->asArray()->all();
                   $totalantro=$antro->find()->from('antropometrica')->filterWhere(['year'=>$year,'tipo_prueba'=>$tipo])->asArray()->count();
                   
                   if($totalantro>0) 
                   {
                        foreach ($listaantro as $valor)
                   {
                    $antropercentil=new AntropometricaPercentil();   
                   
                        
                        if(!$antropercentil->findOne($valor['id_antropometrica']))
                        {
                      
                        $antropercentil->id_prueba_antropometrica=$valor['id_antropometrica'];
                        $antropercentil->cedula_atleta=$valor['cedula_atleta'];
                        $antropercentil->year=$year;
                        $antropercentil->tipo_prueba=$tipo;
                        $antropercentil->peso=$antro->calcularPercentil('peso', $valor['peso'],'antropometrica', $year, $tipo);
                        $antropercentil->altura_pie=$antro->calcularPercentil('altura_pie', $valor['altura_pie'],'antropometrica', $year, $tipo);
                        $antropercentil->altura_sentado=$antro->calcularPercentil('altura_sentado', $valor['altura_sentado'],'antropometrica', $year, $tipo);
                        $antropercentil->porcentaje_grasa=$antro->calcularPercentil('porcentaje_grasa', $valor['porcentaje_grasa'],'antropometrica', $year, $tipo);
                        $antropercentil->abertura=$antro->calcularPercentil('abertura', $valor['abertura'],'antropometrica', $year, $tipo);
                      
                        $antropercentil->insert();
                        }
                        else
                        {
                             $antropercentil->id_prueba_antropometrica=$valor['id_antropometrica'];
                             $antropercentil->cedula_atleta=$valor['cedula_atleta'];
                            $antropercentil->year=$year;
                             $antropercentil->tipo_prueba=$tipo;
                            $antropercentil->peso=$antro->calcularPercentil('peso', $valor['peso'],'antropometrica', $year, $tipo);
                            $antropercentil->altura_pie=$antro->calcularPercentil('altura_pie', $valor['altura_pie'],'antropometrica', $year, $tipo);
                            $antropercentil->altura_sentado=$antro->calcularPercentil('altura_sentado', $valor['altura_sentado'],'antropometrica', $year, $tipo);
                            $antropercentil->porcentaje_grasa=$antro->calcularPercentil('porcentaje_grasa', $valor['porcentaje_grasa'],'antropometrica', $year, $tipo);
                            $antropercentil->abertura=$antro->calcularPercentil('abertura', $valor['abertura'],'antropometrica', $year, $tipo);
                            $antropercentil->delete();
                            $antropercentil->update();
                        }
                        
                        

                      
                     
                   } 
                      $searchModel = new AntropometricaPercentilSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                            return $this->render('/antropometrica-percentil/index', [
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
    
    
    
    
    
    
 

}
