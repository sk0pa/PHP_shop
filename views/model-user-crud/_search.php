<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\UserModelCrud $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_User') ?>

    <?= $form->field($model, 'Email') ?>

    <?= $form->field($model, 'Login') ?>

    <?= $form->field($model, 'Password') ?>

    <?= $form->field($model, 'Phone') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
