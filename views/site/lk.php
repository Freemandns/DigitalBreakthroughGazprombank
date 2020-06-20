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

$get_user_rating = Yii::$app->user->identity->rating;
$get_user_avatar = Yii::$app->user->identity->avatar;
$get_user_achievement = Achievements::findOne(Yii::$app->user->identity->achievement_id)->achievement_img;
$get_user_firstname = Yii::$app->user->identity->firstname;
$get_user_surname = Yii::$app->user->identity->surname;
$get_user_patronymic = Yii::$app->user->identity->patronymic;
$get_user_department = Department::findOne(Yii::$app->user->identity->department_id)->department_name;
$get_user_position = Positions::findOne(Yii::$app->user->identity->position_id)->position_name;
$get_user_gk = Yii::$app->user->identity->gazprom_coin;


// // $user = User::find()->where(['name' => 'CeBe'])->one();

// echo "<div id='rating_user'>Рейтинг: ".$get_user_rating."</div>";
// echo "<div id='avatar_user'>Аватар: <img width='150px' src='".$get_user_avatar."' alt='avatar_img'></div>";
// if ($get_user_achievement != "") {
//     echo "<div id='achievements_user'>Ачивка: ".$get_user_achievement."</div>";
// }
// echo "<div id='firstname_user'>Имя: ".$get_user_firstname."</div>";
// echo "<div id='surname_user'>Фамилия: ".$get_user_surname."</div>";
// if ($get_user_patronymic != "") {
//     echo "<div id='patronymic_user'>Отчество: ".$get_user_patronymic."</div>";
// }
// echo "<div id='department_user'>Отдел: ".$get_user_department."</div>";
// echo "<div id='position_id'>Должность: ".$get_user_position."</div>";
// echo "<div id='gk_user'>ГК: ".$get_user_gk."</div>";
// echo "<a href='".Url::toRoute(['site/store'])."'>Магазин</a><br>";
// echo "<a href='".Url::toRoute(['game/index'])."'>Игра</a><br>";
// echo "<a href='".Url::toRoute(['site/my-idea'])."'>Мои идеи</a><br>";
// echo "<a href='".Url::toRoute(['add-idea-users/create'])."'>Предолжить идею</a><br>";
// echo "<a href='".Url::toRoute(['site/favorite-idea'])."'>Понравившиеся идеи</a><br>";
?>
<div id='b_cont'>
    <div id='profile_view'>
        <div id='name_page'><?php echo Html::encode($this->title); ?></div>
        <div id='rating_circle'><?php echo $get_user_rating; ?></div>
        <div id='avatar_view'><img width='150px' src='<?php echo $get_user_avatar; ?>' alt='avatar_img'></div>
        <div id='achievement_img'><img src='<?php echo $get_user_achievement; ?>' alt='achievement_img'></div>
        <div id='user_profile_info'>
            <div id='firstname_user' class='m10px'>Имя:<br><?php echo $get_user_firstname; ?></div>
            <div id='surname_user' class='m10px'>Фамилия:<br><?php echo $get_user_surname; ?></div>
            <?php
                if ($get_user_patronymic != "") {
                    echo "<div id='patronymic_user' class='m10px'>Отчество:<br>".$get_user_patronymic."</div>";
                }
            ?>
            <div id='department_user' class='m10px'>Отдел:<br><?php echo $get_user_department; ?></div>
            <div id='position_id' class='m10px'>Должность:<br><?php echo $get_user_position; ?></div>
            <div id='gk_user'>ГК:<br><?php echo $get_user_gk; ?></div>
        </div>
        <div id='btn_lk'>
            <a class='btn_lk_view' href='<?php echo Url::toRoute(['site/store']) ?>'>Магазин</a> |
            <a class='btn_lk_view' href='<?php echo Url::toRoute(['game/index']) ?>'>Игра</a> |
            <a class='btn_lk_view' href='<?php echo Url::toRoute(['site/my-idea']) ?>'>Мои идеи</a> |
            <a class='btn_lk_view' href='<?php echo Url::toRoute(['add-idea-users/create']) ?>'>Предолжить идею</a> |
            <a class='btn_lk_view' href='<?php echo Url::toRoute(['site/favorite-idea']) ?>'>Понравившиеся идеи</a><br>
        </div>
    </div>
</div>
