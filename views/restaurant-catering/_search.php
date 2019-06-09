<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RestaurantCateringSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="restaurant-catering-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rc_id') ?>

    <?= $form->field($model, 'rc_name') ?>

    <?= $form->field($model, 'rc_cuisine') ?>

    <?= $form->field($model, 'rc_currency') ?>

    <?= $form->field($model, 'rc_average_cost') ?>

    <?php // echo $form->field($model, 'rc_telp') ?>

    <?php // echo $form->field($model, 'rc_address') ?>

    <?php // echo $form->field($model, 'rc_city') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
