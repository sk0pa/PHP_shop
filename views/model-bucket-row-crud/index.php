<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\BucketRowModelCrud $searchModel
 */

$this->title = 'Bucket Row Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bucket-row-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bucket Row Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Bucket_Part',
            'Id_Bucket',
            'Id_Goods',
            'Number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
