<?php

use yii\helpers\Html;
use yii\db\ActiveRecord;
use app\models\entities\Store;
use yii\helpers\Url;

    $this->title = 'Магазин';
    echo "<h1>".Html::encode($this->title)."</h1>";
    echo "<a href='".Url::toRoute(['site/history-store'])."'>История покупок</a><br>";
    $get_all_store_product = Store::find()->asArray()->all();
    foreach ($get_all_store_product as $r) {
        echo "<div><img width='50px' src='".$r['product_img']."' alt='product_img'>".$r['product_name']." Описание: ".$r['product_description']."; Цена: ".$r['product_count']."</div><br>";
        if (Yii::$app->user->identity->gazprom_coin < $r['product_count']) {
            echo "Для приобретения данного товара у Вас не достаточно ГК (ГазпромБанкКоинов).";
        } else{
            echo "<a href='".Url::toRoute(['site/buy-product', 'buy' => $r['id_product']])."'>купить</a>";
        }
    }
    
?>