<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\BucketRowModel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="bucket-row-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Bucket')->textInput() ?>

    <?= $form->field($model, 'Id_Goods')->textInput() ?>

    <?= $form->field($model, 'Number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
