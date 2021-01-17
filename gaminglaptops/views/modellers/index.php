<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\mmyildizs\gaminglaptops\models\ModellersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modellers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modellers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Modellers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'MarkaAdi',
            'ModelAdi',
            'GPU',
            'CPU',
            //'RAM_GB',
            //'SSD_GB',
            //'Fiyat_TL',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
