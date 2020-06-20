<?php


namespace app\controllers;


use app\models\entities\Users;
use Yii;
use yii\web\Controller;

class GameController extends Controller
{
	public function actionIndex()
	{
		$addCoin=(strtotime(date('Y-m-d'))-strtotime(Yii::$app->user->identity->date_coin))/60/60/24;

		if($addCoin>0)
		{
			$user=Users::findOne(Yii::$app->user->id);
			$user->gazprom_coin+=$addCoin*Yii::$app->user->identity->tower_level_id;
			$user->date_coin=date('Y-m-d');
			$user->save();
		}

		return $this->render('index');
	}
}