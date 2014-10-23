<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\GoodsModel $model
 */

$this->title = 'Update Goods Model: ' . $model->Id_Goods;
$this->params['breadcrumbs'][] = ['label' => 'Goods Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Goods, 'url' => ['view', 'id' => $model->Id_Goods]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="goods-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
