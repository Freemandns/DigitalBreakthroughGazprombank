<?php
    use app\models\entities\Store;
    use app\models\entities\Users;
    use app\models\entities\StoreUnification;
    echo "Мои покупки";

$get_user_id = Yii::$app->user->identity->id;

$get_user_buy_product = Store::find()->asArray()->select(['product_name', 'product_description', 'product_img', 'product_count'])->innerJoin('store_unification', 'store_unification.product_id = store.id_product')->where(['user_id' => $get_user_id])->all();
foreach ($get_user_buy_product as $r) {
    echo "<div><img width='50px' src='".$r['product_img']."' alt='product_img'>".$r['product_name']." Описание: ".$r['product_description']."; Цена: ".$r['product_count']."</div><br>";
}
?>