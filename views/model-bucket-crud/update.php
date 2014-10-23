<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\BucketModel $model
 */

$this->title = 'Update Bucket Model: ' . $model->Id_Bucket;
$this->params['breadcrumbs'][] = ['label' => 'Bucket Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Bucket, 'url' => ['view', 'id' => $model->Id_Bucket]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bucket-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
