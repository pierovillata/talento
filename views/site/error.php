<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        
        Ha ocurrido un error en el servidor Web procesando su peticion
    </p>
    <p>
       Por favor contactenos si usted piensa que es un error. Gracias
        
    </p>

</div>
