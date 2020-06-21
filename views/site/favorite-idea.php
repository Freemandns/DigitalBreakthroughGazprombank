<?php 
use yii\helpers\Html;
use yii\db\ActiveRecord;
use app\models\entities\FavoriteIdeas;
use app\models\entities\Thematics;
use app\models\entities\IdeaUsers;
use yii\helpers\Url;

$this->title = 'Понравившиеся идеи';

echo "<div id='st_page'>";
    echo "<p id='favorite_theme_header'>".Html::encode($this->title)."</p>";

    $get_user_id = Yii::$app->user->identity->id;

    $get_favorite_ideas = IdeaUsers::find()->asArray()->select(['id_idea_user', 'thematic_name', 'idea_header', 'idea_description', 'mood_name'])->innerJoin('favorite_ideas', 'favorite_ideas.name_fav_idea_id = idea_users.id_idea_user')->innerJoin('thematics', 'thematics.id_thematic = idea_users.thematic_id')->innerJoin('moods', 'moods.id_mood = idea_users.mood_id')->where(['favorite_ideas.user_id' => $get_user_id])->all();
    foreach ($get_favorite_ideas as $r) {
        echo "<div id='theme_favorite_list'>Тематика: ".$r['thematic_name']." Заголовок: ".$r['idea_header']." Описание: ".$r['idea_description']." Настроение: ".$r['mood_name']."<br><a class ='idea_btn' extends AnotherClass implements Interface
        {
            
        }
         href='#'>удалить</a></div><br>";

        echo " <a href='".Url::toRoute(['site/idea-more', 'more' => $r['id_idea_user']])."' class='idea_btn'>Подробнее</a>";
    }
echo "</div>";
?>