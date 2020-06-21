<?php

use yii\helpers\Html;
use yii\db\ActiveRecord;
use app\models\entities\Store;
use yii\helpers\Url;

    echo "<div id='shop_page'>";
        $this->title = 'Магазин';
        // echo "<h1>".Html::encode($this->title)."</h1>";
        echo "<p id='shop_page_header'>".Html::encode($this->title)."</p>";
        echo "<a id='history_buy' href='".Url::toRoute(['site/history-store'])."'>История покупок</a><br>";
        $get_all_store_product = Store::find()->asArray()->all();
        foreach ($get_all_store_product as $r) {
            echo "<div id='product'><div><img id='shop_product_img_style' width='80px' src='".$r['product_img']."' alt='product_img'></div><div><br>".$r['product_name']."<br><br>Описание: ".$r['product_description'].";<br>Цена: ".$r['product_count']."</div></div><br>";
            if (Yii::$app->user->identity->gazprom_coin < $r['product_count']) {
                echo "<div id='low_coin'>Для приобретения <br>данного товара <br>у Вас не достаточно ГК <br>(ГазпромБанкКоинов).</div><br>";
            } else{
                echo "<a href='".Url::toRoute(['site/buy-product', 'buy' => $r['id_product']])."' id='by_product'>купить</a>";
            }
        }
    echo "</div>"
    
?>