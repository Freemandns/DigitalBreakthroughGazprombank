<?php

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

$this->title='Выборка';
?>
<div class="idea-users-index">

	<h1><?=Html::encode($this->title)?></h1>

	<?php Pjax::begin(); ?>

	<?=GridView::widget([
		'dataProvider'=>$dataProvider,
		'columns'=>[
			['class'=>'yii\grid\SerialColumn'],

//			'id_idea_user',
			'thematic_id',
			'idea_header',
			'idea_description',
			'mood_id',
			'user_id',
			//'status_id',

//			['class'=>'yii\grid\ActionColumn'],
		],
	]);?>

	<?php Pjax::end(); ?>

</div>