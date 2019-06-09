<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RestaurantCateringSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Restaurant Caterings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurant-catering-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Restaurant Catering', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rc_id',
            'rc_name',
            'rc_cuisine',
            'rc_currency',
            'rc_average_cost',
            //'rc_telp',
            //'rc_address',
            //'rc_city',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
