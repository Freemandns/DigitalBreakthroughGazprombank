<?php


namespace app\controllers;


use app\models\entities\Department;
use app\models\entities\IdeaUsers;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class IdeasController extends Controller
{
	public function actionFilterThematics($filter)
	{
		$dataProvider=new ActiveDataProvider([
			'query'=>IdeaUsers::find(),
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
}