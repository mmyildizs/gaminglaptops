<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\mmyildizs\gaminglaptops\models\ModellersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modellers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'MarkaAdi') ?>

    <?= $form->field($model, 'ModelAdi') ?>

    <?= $form->field($model, 'GPU') ?>

    <?= $form->field($model, 'CPU') ?>

    <?php // echo $form->field($model, 'RAM_GB') ?>

    <?php // echo $form->field($model, 'SSD_GB') ?>

    <?php // echo $form->field($model, 'Fiyat_TL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
