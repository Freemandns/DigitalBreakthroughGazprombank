<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "tower_levels".
 *
 * @property int $id_tower_level
 * @property string $tower_level_name
 *
 * @property Users[] $users
 * @property Users[] $users0
 */
class TowerLevels extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tower_levels';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tower_level_name'], 'required'],
            [['tower_level_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tower_level' => 'Id Tower Level',
            'tower_level_name' => 'Tower Level Name',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['tower_progress' => 'id_tower_level']);
    }

    /**
     * Gets query for [[Users0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers0()
    {
        return $this->hasMany(Users::className(), ['tower_level_id' => 'id_tower_level']);
    }
}
