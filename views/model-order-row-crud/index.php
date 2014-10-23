<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\OrderRowModelCrud $searchModel
 */

$this->title = 'Order Row Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-row-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Row Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Order_Row',
            'Id_Order',
            'Id_Goods',
            'Number',
            'Price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
