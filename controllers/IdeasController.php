<?php


namespace app\controllers;


use app\models\entities\IdeaUsers;
use yii\web\Controller;

class IdeasController extends Controller
{
	public function actionFilterThematics($filter)
	{
		return $this->render('index',[
			'model'=>IdeaUsers::find()->where(['thematic_id'=>$filter])->all()
		]);
	}

	public function actionFilterDepartment($filter)
	{
		return $this->render('index', [
			'model'=>IdeaUsers::find()->join(
				'INNER JOIN',
				'users',
				'idea_users.user_id=users.id'
			)->where(['department_id'=>$filter])->all()
		]);
	}
}