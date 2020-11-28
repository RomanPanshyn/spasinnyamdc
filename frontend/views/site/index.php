<?php

/* @var $this yii\web\View */
use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'МДЦ Готель';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>ХРИСТИЯНСЬКИЙ ГОТЕЛЬ</h1>
        <h2>МОЛОДІЖНО-ДУХОВНОГО ЦЕНТРУ</h2>
        <h2>Церкви СПАСІННЯ</h2>
    </div>

    <div class="body-content">

        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <h4><i class="icon fa fa-check"></i>Збережено!</h4>
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php endif; ?>

        <h2 align="center">Онлайн бронювання номера готеля МДЦ</h2>
        <div class="row">
            <?php $form = ActiveForm::begin(['id' => 'book-form']); ?>
            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                'mask' => '+38 (999) 999-99-99'])->textInput(['placeholder'=>'+38 (___) ___-__-__']) ?>
            <?= $form->field($model, 'datefrom')->widget(DateTimePicker::className(), [
                'name' => 'datetime_10',
                'options' => ['placeholder' => 'З якої дати'],
                'language' => 'uk',
                'type' => DateTimePicker::TYPE_INPUT,
                'pluginOptions' => [
                    'format' => 'dd/mm/yyyy hh:ii',
                    'autoclose' => true,
                ]
            ]); ?>
            <?= $form->field($model, 'dateto')->widget(DateTimePicker::className(), [
                'name' => 'datetime_10',
                'options' => ['placeholder' => 'До якої дати'],
                'language' => 'uk',
                'type' => DateTimePicker::TYPE_INPUT,
                'pluginOptions' => [
                    'format' => 'dd/mm/yyyy hh:ii',
                    'autoclose' => true,
                ]
            ]); ?>
            <div class="form-group">
                <?= Html::submitButton('Забронювати', ['class' => 'btn btn-primary', 'name' => 'book-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
