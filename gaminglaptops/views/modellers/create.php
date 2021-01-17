<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\mmyildizs\gaminglaptops\models\Modellers */

$this->title = 'Create Modellers';
$this->params['breadcrumbs'][] = ['label' => 'Modellers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modellers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
