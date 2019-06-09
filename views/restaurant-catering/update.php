<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RestaurantCatering */

$this->title = 'Update Restaurant Catering: ' . $model->rc_id;
$this->params['breadcrumbs'][] = ['label' => 'Restaurant Caterings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rc_id, 'url' => ['view', 'id' => $model->rc_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="restaurant-catering-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
