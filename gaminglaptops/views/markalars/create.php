<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\mmyildizs\gaminglaptops\models\Markalars */

$this->title = 'Create Markalars';
$this->params['breadcrumbs'][] = ['label' => 'Markalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="markalars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
