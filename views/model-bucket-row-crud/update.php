<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\BucketRowModel $model
 */

$this->title = 'Update Bucket Row Model: ' . $model->Id_Bucket_Part;
$this->params['breadcrumbs'][] = ['label' => 'Bucket Row Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Bucket_Part, 'url' => ['view', 'id' => $model->Id_Bucket_Part]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bucket-row-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
