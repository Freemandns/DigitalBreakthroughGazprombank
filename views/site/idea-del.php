<?php

use app\models\entities\IdeaUsers;

$get_user_id = Yii::$app->user->identity->id;

    if ($_GET['del'] != "") {
        $del = IdeaUsers::findOne($_GET['del']);
        $del->status_id = 3;
        $del->save();
        echo '<meta http-equiv="refresh" content="0;URL=web/index.php?r=site%2Fmy-idea">';
    }
?>