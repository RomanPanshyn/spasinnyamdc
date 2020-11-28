<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Adminmdc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adminmdc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'roomnumber')->textInput() ?>

    <?= $form->field($model, 'totaldays')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

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
        <?= Html::submitButton('Зберегти', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
