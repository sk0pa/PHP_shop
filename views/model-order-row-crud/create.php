<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\OrderRowModel $model
 */

$this->title = 'Create Order Row Model';
$this->params['breadcrumbs'][] = ['label' => 'Order Row Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-row-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
