<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "achievements_unification".
 *
 * @property int $id
 * @property int $achievement_id
 * @property int $user_id
 *
 * @property Achievements $achievement
 * @property Users $user
 * @property Users[] $users
 */
class AchievementsUnification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'achievements_unification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['achievement_id', 'user_id'], 'required'],
            [['achievement_id', 'user_id'], 'integer'],
            [['achievement_id'], 'exist', 'skipOnError' => true, 'targetClass' => Achievements::className(), 'targetAttribute' => ['achievement_id' => 'id_achievement']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'achievement_id' => 'Achievement ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[Achievement]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAchievement()
    {
        return $this->hasOne(Achievements::className(), ['id_achievement' => 'achievement_id']);
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

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['achievement_id' => 'id']);
    }
}
