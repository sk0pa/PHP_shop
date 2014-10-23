<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\BucketRowModel $model
 */

$this->title = $model->Id_Bucket_Part;
$this->params['breadcrumbs'][] = ['label' => 'Bucket Row Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bucket-row-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Bucket_Part], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Bucket_Part], [
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
            'Id_Bucket_Part',
            'Id_Bucket',
            'Id_Goods',
            'Number',
        ],
    ]) ?>

</div>
