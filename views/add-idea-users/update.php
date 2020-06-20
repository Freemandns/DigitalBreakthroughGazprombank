<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\entities\IdeaUsers */

$this->title = 'Update Idea Users: ' . $model->id_idea_user;
$this->params['breadcrumbs'][] = ['label' => 'Idea Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_idea_user, 'url' => ['view', 'id' => $model->id_idea_user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="idea-users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
