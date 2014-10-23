<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\GoodsModel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="goods-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Producer')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'Model')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'Type')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'Kind')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
