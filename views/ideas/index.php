<?php

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

use app\models\entities\Evaluations;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
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
			'thematic.thematic_name',
			'idea_header',
			'idea_description',
			'mood.mood_name',
			'user.surname',
			//'status_id',

			[
				'class'=>'yii\grid\ActionColumn',
				'template'=>'{like} {dislike} {view}',
				'buttons'=>[
					'like'=>function($url,$model,$key)
					{
					    if(Evaluations::find()->where(['id_user'=>Yii::$app->user->id])->andWhere([
								'id_idea_users'=>$key
							])->count()==0)
                        {
							Url::remember();
							return Html::a('Лайк',Url::toRoute(['like','id'=>$key]));
                        }
					    else
                        {
                            return null;
                        }
					},
					'dislike'=>function($url,$model,$key)
					{
						if(Evaluations::find()->where(['id_user'=>Yii::$app->user->id])->andWhere([
								'id_idea_users'=>$key
							])->count()==0)
                        {
							Url::remember();
							return Html::a('Дизлайк',Url::toRoute(['dislike','id'=>$key]));
                        }
						else
						{
							return null;
						}
					},
				]
			],
		],
	]);?>

	<?php Pjax::end(); ?>

</div>