<?php

namespace app\controllers;

class PsicologoController extends \yii\web\Controller
{
    public $layout="psicologo";
    public function actionIndex()
    {
        return $this->render('index');
    }

}
