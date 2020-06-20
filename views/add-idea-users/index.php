<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Idea Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="idea-users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Idea Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_idea_user',
            'thematic_id',
            'idea_header',
            'idea_description',
            'mood_id',
            //'user_id',
            //'status_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
