<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\OrderModelCrud $searchModel
 */

$this->title = 'Order Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Order',
            'Id_User',
            'Date',
            'AllPrice',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
