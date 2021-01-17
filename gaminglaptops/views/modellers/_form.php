<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\mmyildizs\gaminglaptops\models\Modellers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modellers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'MarkaAdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ModelAdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GPU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CPU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RAM_GB')->textInput() ?>

    <?= $form->field($model, 'SSD_GB')->textInput() ?>

    <?= $form->field($model, 'Fiyat_TL')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
