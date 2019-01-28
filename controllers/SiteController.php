<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Persona;
use app\models\Atleta;
use yii\bootstrap\Alert;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    
    public function actionAspirante()
    {
        $model = new Persona();
        $model2=new Atleta();

        if ($model->load(Yii::$app->request->post()) && $model2->load(Yii::$app->request->post())&& 
                $model->validate()) {
           
           
            $atleta=new Atleta();
            $atleta->cedula_atleta=$model->cedula;
            $atleta->curso_id=$model2->curso_id;
            $atleta->deporte_id=$model2->deporte_id;
            $atleta->cedula_entrenador=$model2->cedula_entrenador;
            $atleta->estado="promocionado";
            $atleta->nivel="principiante";
            $atleta->ranking=0;
            $atleta->escuela_procedencia=$model2->escuela_procedencia;
            $atleta->seleccionado=0;
             $model->save();
            $atleta->save();
           
         
         
            return $this->render('index');
        } else {
            return $this->render('aspirante', [
                'model' => $model,
            ]);
        }
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            
            $nombre=$model->username;
            
            switch ($nombre) {
                case 'coordinador':
                    $this->redirect('/talento/web/index.php/coordinador/index');
                    break;

                case 'asistente':
                    $this->redirect('/talento/web/index.php/asistente/index');
                    break;

                case 'coach':
                    $this->redirect('/talento/web/index.php/coach/index');
                    break;

                case 'doctor':
                    $this->redirect('/talento/web/index.php/doctor/index');
                    break;

                case 'psicologo':
                    $this->redirect('/talento/web/index.php/psicologo/index');
                    break;
                
                default:
                     return $this->goBack();
                    break;
            }

           
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
