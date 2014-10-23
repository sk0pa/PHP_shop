<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\OrderRowModelCrud $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="order-row-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Order_Row') ?>

    <?= $form->field($model, 'Id_Order') ?>

    <?= $form->field($model, 'Id_Goods') ?>

    <?= $form->field($model, 'Number') ?>

    <?= $form->field($model, 'Price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
