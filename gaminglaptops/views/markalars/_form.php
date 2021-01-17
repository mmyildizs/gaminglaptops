<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\mmyildizs\gaminglaptops\models\Markalars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="markalars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'markadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modeladedi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
