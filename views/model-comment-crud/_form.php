<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\CommentModel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="comment-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Comment')->textInput() ?>

    <?= $form->field($model, 'Id_User')->textInput() ?>

    <?= $form->field($model, 'Id_Goods')->textInput() ?>

    <?= $form->field($model, 'Text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
