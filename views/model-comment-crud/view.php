<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\CommentModel $model
 */

$this->title = $model->Id_Comment;
$this->params['breadcrumbs'][] = ['label' => 'Comment Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Comment], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Comment], [
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
            'Id_Comment',
            'Id_User',
            'Id_Goods',
            'Text:ntext',
        ],
    ]) ?>

</div>
