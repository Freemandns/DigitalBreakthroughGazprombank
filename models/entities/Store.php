<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "store".
 *
 * @property int $id_product
 * @property string $product_name
 * @property string $product_description
 * @property string $product_img
 * @property int $product_count
 *
 * @property StoreUnification[] $storeUnifications
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'store';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'product_description', 'product_img', 'product_count'], 'required'],
            [['product_count'], 'integer'],
            [['product_name', 'product_description', 'product_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_product' => 'Id Product',
            'product_name' => 'Product Name',
            'product_description' => 'Product Description',
            'product_img' => 'Product Img',
            'product_count' => 'Product Count',
        ];
    }

    /**
     * Gets query for [[StoreUnifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStoreUnifications()
    {
        return $this->hasMany(StoreUnification::className(), ['product_id' => 'id_product']);
    }
}
