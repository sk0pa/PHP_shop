<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\GoodsModelCrud $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="goods-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Goods') ?>

    <?= $form->field($model, 'Producer') ?>

    <?= $form->field($model, 'Model') ?>

    <?= $form->field($model, 'Type') ?>

    <?= $form->field($model, 'Kind') ?>

    <?php // echo $form->field($model, 'Price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
