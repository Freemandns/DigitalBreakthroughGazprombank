<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\entities\IdeaUsers */

$this->title = 'Предложение идеи:';
?>
<div class="idea-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
