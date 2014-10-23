<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\UserModel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'Login')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'Password')->passwordInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Phone')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
