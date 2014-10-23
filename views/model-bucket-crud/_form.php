<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\BucketModel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="bucket-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_User')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
