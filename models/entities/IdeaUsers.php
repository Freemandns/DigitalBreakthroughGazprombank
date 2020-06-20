<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "idea_users".
 *
 * @property int $id_idea_user
 * @property int $thematic_id
 * @property string $idea_header
 * @property string $idea_description
 * @property int $mood_id
 * @property int|null $user_id
 * @property int|null $status_id
 *
 * @property Evaluations[] $evaluations
 * @property FavoriteIdeas[] $favoriteIdeas
 * @property Thematics $thematic
 * @property Moods $mood
 * @property Users $user
 * @property IdeaStatuses $status
 */
class IdeaUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'idea_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thematic_id', 'idea_header', 'idea_description', 'mood_id'], 'required'],
            [['thematic_id', 'mood_id', 'user_id', 'status_id'], 'integer'],
            [['idea_header', 'idea_description'], 'string', 'max' => 255],
            [['thematic_id'], 'exist', 'skipOnError' => true, 'targetClass' => Thematics::className(), 'targetAttribute' => ['thematic_id' => 'id_thematic']],
            [['mood_id'], 'exist', 'skipOnError' => true, 'targetClass' => Moods::className(), 'targetAttribute' => ['mood_id' => 'id_mood']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => IdeaStatuses::className(), 'targetAttribute' => ['status_id' => 'id_idea_status']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_idea_user' => 'Id Idea User',
            'thematic_id' => 'Thematic ID',
            'idea_header' => 'Idea Header',
            'idea_description' => 'Idea Description',
            'mood_id' => 'Mood ID',
            'user_id' => 'User ID',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * Gets query for [[Evaluations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluations()
    {
        return $this->hasMany(Evaluations::className(), ['id_idea_users' => 'id_idea_user']);
    }

    /**
     * Gets query for [[FavoriteIdeas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavoriteIdeas()
    {
        return $this->hasMany(FavoriteIdeas::className(), ['name_fav_idea_id' => 'id_idea_user']);
    }

    /**
     * Gets query for [[Thematic]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getThematic()
    {
        return $this->hasOne(Thematics::className(), ['id_thematic' => 'thematic_id']);
    }

    /**
     * Gets query for [[Mood]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMood()
    {
        return $this->hasOne(Moods::className(), ['id_mood' => 'mood_id']);
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
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(IdeaStatuses::className(), ['id_idea_status' => 'status_id']);
    }
}
