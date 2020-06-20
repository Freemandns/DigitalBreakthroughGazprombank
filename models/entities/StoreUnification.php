<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "store_unification".
 *
 * @property int $id_store_unification
 * @property int $product_id
 * @property int $user_id
 *
 * @property Store $product
 * @property Users $user
 */
class StoreUnification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'store_unification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'user_id'], 'required'],
            [['product_id', 'user_id'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Store::className(), 'targetAttribute' => ['product_id' => 'id_product']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_store_unification' => 'Id Store Unification',
            'product_id' => 'Product ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Store::className(), ['id_product' => 'product_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
