<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\OrderRowModel $model
 */

$this->title = 'Update Order Row Model: ' . $model->Id_Order_Row;
$this->params['breadcrumbs'][] = ['label' => 'Order Row Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Order_Row, 'url' => ['view', 'id' => $model->Id_Order_Row]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-row-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
