<?php

use app\models\entities\IdeaUsers;

$get_user_id = Yii::$app->user->identity->id;

    if ($get_user_id == 2) {
        if ($_GET['close'] != "") {
            $close = IdeaUsers::findOne($_GET['close']);
            $close->status_id = 2;
            $close->save();
            echo '<meta http-equiv="refresh" content="0;URL=web/index.php?r=site%2Fmy-idea">';
        }
    }
?>