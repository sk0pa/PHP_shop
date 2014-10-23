<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\CommentModel $model
 */

$this->title = 'Create Comment Model';
$this->params['breadcrumbs'][] = ['label' => 'Comment Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
