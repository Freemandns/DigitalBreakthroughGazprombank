<?php
use app\models\entities\Store;
use app\models\entities\Users;

    if ($_GET['buy'] != "") {
        $params = ['product_id' => $_GET['buy'], 'user_id' => Yii::$app->user->identity->id];
        Yii::$app->db->createCommand()->insert('store_unification', $params)->execute();

        $count = Store::findOne($_GET['buy']);
        $get_count_product = $count->product_count;
        
        $get_user_gazprom_coin = Yii::$app->user->identity->gazprom_coin;

        $user_gazprom_coin_res = $get_user_gazprom_coin - $get_count_product;

        $new_gazprom_coin_user_count = Users::findOne(Yii::$app->user->identity->id);
        $new_gazprom_coin_user_count->gazprom_coin = $user_gazprom_coin_res;
        $new_gazprom_coin_user_count->save();

        echo '<meta http-equiv="refresh" content="0;URL=web/index.php?r=site%2store">';
    } else{
        echo '<meta http-equiv="refresh" content="0;URL=web/index.php?r=site%2Fstore">';
    }
?>