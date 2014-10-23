<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\CommentModel $model
 */

$this->title = 'Update Comment Model: ' . $model->Id_Comment;
$this->params['breadcrumbs'][] = ['label' => 'Comment Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Comment, 'url' => ['view', 'id' => $model->Id_Comment]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comment-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
