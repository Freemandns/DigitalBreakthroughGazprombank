<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "positions".
 *
 * @property int $id_position
 * @property string $position_name
 *
 * @property Users[] $users
 */
class Positions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'positions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position_name'], 'required'],
            [['position_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_position' => 'Id Position',
            'position_name' => 'Position Name',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['position_id' => 'id_position']);
    }
}
