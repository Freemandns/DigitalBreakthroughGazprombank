<?php 
use yii\helpers\Html;
use yii\db\ActiveRecord;
use app\models\entities\IdeaUsers;
use app\models\entities\Thematics;
use yii\helpers\Url;

$this->title = 'Мои идеи';
    echo "<h1>".Html::encode($this->title)."</h1>";

$get_user_id = Yii::$app->user->identity->id;

// $get_thematic_idea = Thematics::findOne(Yii::$app->user->identity->department_id)->department_name;

$get_all_store_product = IdeaUsers::find()->asArray()->select(['id_idea_user', 'thematic_name', 'idea_header', 'idea_description', 'mood_name', 'idea_status_name', 'status_id'])->innerJoin('thematics', 'thematics.id_thematic = idea_users.thematic_id')->innerJoin('moods', 'moods.id_mood = idea_users.mood_id')->innerJoin('idea_statuses', 'idea_statuses.id_idea_status = idea_users.status_id')->where(['user_id' => $get_user_id])->all();

// print_r($get_all_store_product);

// if (isset($_POST[''])) {
//     # code...
// }

foreach ($get_all_store_product as $r) {
    echo "<div>Тематика: ".$r['thematic_name']." Заголовок: ".$r['idea_header']." Описание: ".$r['idea_description']." Настроение: ".$r['mood_name']." Статус: ".$r['idea_status_name']."</div><br>";

    $status_idea = $r['id_idea_user'];

    if ($get_user_id == 2) {
        if ($r['status_id'] == 1) {
            echo "<a href='".Url::toRoute(['site/moder-idea-close', 'close' => $status_idea])."'>Закрыть</a>";
        }

    }

    if ($r['idea_status_name'] == "Удалено") {
    } else{
        echo " <a href='".Url::toRoute(['site/idea-del', 'del' => $status_idea])."'>Удалить</a>";
    }
    echo " <a href='".Url::toRoute(['site/idea-more', 'more' => $status_idea])."'>Подробнее</a>";

}

?>