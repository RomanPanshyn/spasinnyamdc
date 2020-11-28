<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Adminmdc */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'МДЦ Адмін', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adminmdc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви впевнені, що хочете видалити цей запис?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'roomnumber',
            'totaldays',
            'name',
            'phone',
            'datefrom',
            'dateto',
        ],
    ]) ?>

</div>
