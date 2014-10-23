<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\UserModel $model
 */

$this->title = 'Update User Model: ' . $model->Id_User;
$this->params['breadcrumbs'][] = ['label' => 'User Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_User, 'url' => ['view', 'id' => $model->Id_User]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
