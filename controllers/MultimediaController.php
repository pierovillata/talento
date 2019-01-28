<?php

namespace app\controllers;

class MultimediaController extends \yii\web\Controller
{
    public function actionFotos()
    {
        return $this->render('fotos');
    }

    public function actionVideos()
    {
        return $this->render('videos');
    }

    public function actionDescargas()
    {
        return $this->render('descargas');
    }

}
