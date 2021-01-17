<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\mmyildizs\gaminglaptops\models\Markalars */

$this->title = 'Update Markalars: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Markalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="markalars-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
