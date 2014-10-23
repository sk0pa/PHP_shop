<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\OrderRowModel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="order-row-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Order')->textInput() ?>

    <?= $form->field($model, 'Id_Goods')->textInput() ?>

    <?= $form->field($model, 'Number')->textInput() ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
