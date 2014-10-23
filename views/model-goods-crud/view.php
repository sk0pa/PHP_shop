<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\GoodsModel $model
 */

$this->title = $model->Id_Goods;
$this->params['breadcrumbs'][] = ['label' => 'Goods Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Goods], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Goods], [
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
            'Id_Goods',
            'Producer',
            'Model',
            'Type',
            'Kind',
            'Price',
        ],
    ]) ?>

</div>
