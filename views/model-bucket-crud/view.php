<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\BucketModel $model
 */

$this->title = $model->Id_Bucket;
$this->params['breadcrumbs'][] = ['label' => 'Bucket Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bucket-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Bucket], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Bucket], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_Bucket',
            'Id_User',
        ],
    ]) ?>

</div>
