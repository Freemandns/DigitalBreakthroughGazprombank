<?php

use app\models\entities\IdeaUsers;
$this->title = 'Подробная информация о идее';

echo "<div id='st_page'>";
    echo "<p id='more_inf_ideas'>".$this->title."</p>";
    $get_user_id = Yii::$app->user->identity->id;

    $get_one_idea = IdeaUsers::findOne($_GET['more']);

    $get_thematic_normal = IdeaUsers::find()->select('thematic_name')->innerJoin('thematics', 'thematics.id_thematic = idea_users.thematic_id')->where(['id_idea_user' => $_GET['more']])->column();

    $get_moode_normal = IdeaUsers::find()->select('mood_name')->innerJoin('moods', 'moods.id_mood = idea_users.mood_id')->where(['id_idea_user' => $_GET['more']])->column();

    $get_status_normal = IdeaUsers::find()->select('idea_status_name')->innerJoin('idea_statuses', 'idea_statuses.id_idea_status = idea_users.status_id')->where(['id_idea_user' => $_GET['more']])->column();

    echo "<div id='more_inf_txt'>Тематика: " . $get_thematic_normal[0] . "<br>Заголовок: " . $get_one_idea->idea_header . "<br>" . "Описание: " . $get_one_idea->idea_description . "<br> Настроение: " . $get_moode_normal[0] . "<br> Статус: " . $get_status_normal[0] . "</div>";
echo "</div>";
?>