<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\BucketModel $model
 */

$this->title = 'Create Bucket Model';
$this->params['breadcrumbs'][] = ['label' => 'Bucket Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bucket-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
