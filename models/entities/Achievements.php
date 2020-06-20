<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "achievements".
 *
 * @property int $id_achievement
 * @property string $achievement_name
 * @property string $achievement_description
 * @property string $achievement_img
 *
 * @property AchievementsUnification[] $achievementsUnifications
 */
class Achievements extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'achievements';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['achievement_name', 'achievement_description', 'achievement_img'], 'required'],
            [['achievement_name', 'achievement_description', 'achievement_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_achievement' => 'Id Achievement',
            'achievement_name' => 'Achievement Name',
            'achievement_description' => 'Achievement Description',
            'achievement_img' => 'Achievement Img',
        ];
    }

    /**
     * Gets query for [[AchievementsUnifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAchievementsUnifications()
    {
        return $this->hasMany(AchievementsUnification::className(), ['achievement_id' => 'id_achievement']);
    }
}
