<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "moods".
 *
 * @property int $id_mood
 * @property string $mood_name
 *
 * @property IdeaUsers[] $ideaUsers
 */
class Moods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'moods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mood_name'], 'required'],
            [['mood_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mood' => 'Id Mood',
            'mood_name' => 'Настроение',
        ];
    }

    /**
     * Gets query for [[IdeaUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdeaUsers()
    {
        return $this->hasMany(IdeaUsers::className(), ['mood_id' => 'id_mood']);
    }
}
