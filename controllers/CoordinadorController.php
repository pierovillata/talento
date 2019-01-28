<?php

namespace app\controllers;

class CoordinadorController extends \yii\web\Controller
{
    public $layout='coordinador';
    public function actionIndex()
    {
        return $this->render('index');
    }

}
