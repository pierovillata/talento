<?php

namespace app\controllers;

class CoachController extends \yii\web\Controller
{
    public $layout="coach";
    public function actionIndex()
    {
        return $this->render('index');
    }

}
