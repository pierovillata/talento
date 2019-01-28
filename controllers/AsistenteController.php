<?php

namespace app\controllers;

class AsistenteController extends \yii\web\Controller
{
    public $layout='asistente';
    public function actionIndex()
    {
        return $this->render('index');
    }

}
