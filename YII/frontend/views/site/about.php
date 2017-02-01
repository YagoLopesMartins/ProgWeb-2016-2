<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <p>Olá, <b>Yago L. Martins</b>. Seja bem-vindo!</p>
    <p><b>Nome da Instituição</b>: <?= $icomp ?></p>
    <p><b>Data de hoje</b>: <?= $data ?></p>

    <code><?= __FILE__ ?></code>
</div>
