<?php


namespace app\controllers;


use app\models\entities\Department;
use app\models\entities\Evaluations;
use app\models\entities\IdeaUsers;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;

class IdeasController extends Controller
{
	public function actionFilterThematics($filter)
	{
		$dataProvider=new ActiveDataProvider([
			'query'=>IdeaUsers::find()->where(['thematic_id'=>$filter]),
		]);

		return $this->render('index',[
			'dataProvider'=>$dataProvider
		]);
	}

	public function actionFilterDepartment($filter)
	{
		$dataProvider=new ActiveDataProvider([
			'query'=>IdeaUsers::find()->join(
				'INNER JOIN',
				'users',
				'idea_users.user_id=users.id'
			)->where(['department_id'=>$filter]),
		]);

		return $this->render('index',[
			'dataProvider'=>$dataProvider,
		]);
	}

	public function actionLike($id)
	{
		$model=new Evaluations();
		$model->id_user=Yii::$app->user->id;
		$model->id_idea_users=$id;
		$model->id_type=1;
		$model->save();
		return $this->redirect(Url::previous());
	}

	public function actionDislike($id)
	{
		$model=new Evaluations();
		$model->id_user=Yii::$app->user->id;
		$model->id_idea_users=$id;
		$model->id_type=2;
		$model->save();
		return $this->redirect(Url::previous());
	}
}