<?php
    use app\models\entities\Store;
    use app\models\entities\Users;
    use app\models\entities\StoreUnification;
    // echo "Мои покупки";

$get_user_id = Yii::$app->user->identity->id;
echo "<div id='shop_page'>";
echo "<p id='shop_history_by'>История покупок</p>";
    // echo "<div id='product'>";
        $get_user_buy_product = Store::find()->asArray()->select(['product_name', 'product_description', 'product_img', 'product_count'])->innerJoin('store_unification', 'store_unification.product_id = store.id_product')->where(['user_id' => $get_user_id])->all();
        foreach ($get_user_buy_product as $r) {
            echo "<div id='product_sort'><img id='shop_product_img_style' width='80px' src='".$r['product_img']."' alt='product_img'><br>".$r['product_name']."<br>Описание: ".$r['product_description'].";<br>Цена: ".$r['product_count']."</div><br>";
        }
    // echo "</div>";
echo "</div>";
?>