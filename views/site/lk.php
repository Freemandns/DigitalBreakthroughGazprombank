<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\models\entities\Achievements;
use app\models\entities\Department;
use app\models\entities\Positions;
use yii\helpers\Url;

$this->title = 'Личный кабинет';
// $this->params['breadcrumbs'][] = $this->title;

$get_user_rating = Yii::$app->user->identity->rating;
$get_user_avatar = Yii::$app->user->identity->avatar;
$get_user_achievement = Achievements::findOne(Yii::$app->user->identity->achievement_id)->achievement_name;
$get_user_firstname = Yii::$app->user->identity->firstname;
$get_user_surname = Yii::$app->user->identity->surname;
$get_user_patronymic = Yii::$app->user->identity->patronymic;
$get_user_department = Department::findOne(Yii::$app->user->identity->department_id)->department_name;
$get_user_position = Positions::findOne(Yii::$app->user->identity->position_id)->position_name;
$get_user_gk = Yii::$app->user->identity->gazprom_coin;


// $user = User::find()->where(['name' => 'CeBe'])->one();

echo "<div id='rating_user'>Рейтинг: ".$get_user_rating."</div>";
echo "<div id='avatar_user'>Аватар: <img width='150px' src='".$get_user_avatar."' alt='avatar_img'></div>";
if ($get_user_achievement != "") {
    echo "<div id='achievements_user'>Ачивка: ".$get_user_achievement."</div>";
}
echo "<div id='firstname_user'>Имя: ".$get_user_firstname."</div>";
echo "<div id='surname_user'>Фамилия: ".$get_user_surname."</div>";
if ($get_user_patronymic != "") {
    echo "<div id='patronymic_user'>Отчество: ".$get_user_patronymic."</div>";
}
echo "<div id='department_user'>Отдел: ".$get_user_department."</div>";
echo "<div id='position_id'>Должность: ".$get_user_position."</div>";
if ($get_user_gk != "") {
    echo "<div id='gk_user'>ГК: ".$get_user_gk."</div>";
}
echo "<a href='".Url::toRoute(['site/store'])."'>Магазин</a><br>";
echo "<a href='".Url::toRoute(['site/game'])."'>Игра</a><br>";
echo "<a href='".Url::toRoute(['site/my-idea'])."'>Мои идеи</a><br>";
echo "<a href='".Url::toRoute(['add-idea-users/create'])."'>Предолжить идею</a><br>";
echo "<a href='".Url::toRoute(['site/favorite-idea'])."'>Понравившиеся идеи</a><br>";
?>
