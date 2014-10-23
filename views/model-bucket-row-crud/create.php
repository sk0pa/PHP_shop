<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\BucketRowModel $model
 */

$this->title = 'Create Bucket Row Model';
$this->params['breadcrumbs'][] = ['label' => 'Bucket Row Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bucket-row-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
