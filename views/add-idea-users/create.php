<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\entities\IdeaUsers */

$this->title = 'Предложение идеи:';
?>
<div class="idea-users-create">

    <div id='st_page'>
        <p id='new_idea_header'><?= Html::encode($this->title) ?></p>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
