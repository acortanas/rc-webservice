<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RestaurantCatering */

$this->title = 'Create Restaurant Catering';
$this->params['breadcrumbs'][] = ['label' => 'Restaurant Caterings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurant-catering-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
