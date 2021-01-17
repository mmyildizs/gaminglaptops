<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\mmyildizs\gaminglaptops\models\MarkalarsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Markalars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="markalars-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Markalars', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'markadi',
            [
                'attribute' => 'modeladedi',
                'value' => function ($model) { return $model->getS()->count();},
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
