<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\OrderModelCrud $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="order-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Order') ?>

    <?= $form->field($model, 'Id_User') ?>

    <?= $form->field($model, 'Date') ?>

    <?= $form->field($model, 'AllPrice') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
