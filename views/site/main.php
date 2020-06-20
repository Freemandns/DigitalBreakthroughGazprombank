<?php

/* @var $this yii\web\View */
/* @var $ideaUsers_dataProvider DataProvider */
/* @var $chart array */
/* @var $thematics array */
/* @var $users_dataProvider DataProvider */
/* @var $randomIdeaUsers_dataProvider DataProvider */

use yii\debug\models\timeline\DataProvider;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Главная';
?>
<div class="site-index">
	<?php Pjax::begin(); ?>

	<?=GridView::widget([
		'dataProvider'=>$ideaUsers_dataProvider,
		'columns'=>[
			['class'=>'yii\grid\SerialColumn'],

			'id_idea_user',
			'thematic_id',
			'idea_header',
			'idea_description',
			'mood_id',
			//'user_id',

//			['class'=>'yii\grid\ActionColumn'],
		],
	]);?>

	<?php Pjax::end(); ?>

    <hr>

    <?php print_r($chart) ?>

    <hr>

    <?php print_r($thematics) ?>

    <hr>

	<?php Pjax::begin(); ?>

	<?=GridView::widget([
		'dataProvider'=>$users_dataProvider,
		'columns'=>[
			['class'=>'yii\grid\SerialColumn'],

			'id',
			'login',
			'email:email',
			'firstname',
			'surname',
			//'patronymic',
			//'avatar',
			//'role_id',
			//'position_id',
			//'department_id',
			//'rating',
			//'achievement_id',
			//'gazprom_coin',
			//'favourite_idea_id',
			//'idea_user_id',
			//'tower_level_id',
			//'tower_progress',

//			['class'=>'yii\grid\ActionColumn'],
		],
	]);?>

	<?php Pjax::end(); ?>

    <hr>

	<?php Pjax::begin(); ?>

	<?=GridView::widget([
		'dataProvider'=>$randomIdeaUsers_dataProvider,
		'columns'=>[
			['class'=>'yii\grid\SerialColumn'],

			'id_idea_user',
			'thematic_id',
			'idea_header',
			'idea_description',
			'mood_id',
			//'user_id',

//			['class'=>'yii\grid\ActionColumn'],
		],
	]);?>

	<?php Pjax::end(); ?>
</div>
