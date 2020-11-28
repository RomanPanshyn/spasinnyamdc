<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Adminmdc */

$this->title = 'Створити запис';
$this->params['breadcrumbs'][] = ['label' => 'МДЦ Адмін', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adminmdc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
