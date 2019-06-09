<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RestaurantCatering */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="restaurant-catering-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rc_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rc_cuisine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rc_currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rc_average_cost')->textInput() ?>

    <?= $form->field($model, 'rc_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rc_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rc_city')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
