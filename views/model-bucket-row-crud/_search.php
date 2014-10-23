<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\BucketRowModelCrud $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="bucket-row-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Bucket_Part') ?>

    <?= $form->field($model, 'Id_Bucket') ?>

    <?= $form->field($model, 'Id_Goods') ?>

    <?= $form->field($model, 'Number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
