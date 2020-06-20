<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id_task
 * @property int $thematic_id
 * @property string $task_name
 * @property string $task_description
 * @property int $mood_id
 *
 * @property FavouriteTasks[] $favouriteTasks
 * @property Thematics $thematic
 * @property Moods $mood
 * @property Users[] $users
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thematic_id', 'task_name', 'task_description', 'mood_id'], 'required'],
            [['thematic_id', 'mood_id'], 'integer'],
            [['task_name', 'task_description'], 'string', 'max' => 255],
            [['thematic_id'], 'exist', 'skipOnError' => true, 'targetClass' => Thematics::className(), 'targetAttribute' => ['thematic_id' => 'id_thematic']],
            [['mood_id'], 'exist', 'skipOnError' => true, 'targetClass' => Moods::className(), 'targetAttribute' => ['mood_id' => 'id_mood']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_task' => 'Id Task',
            'thematic_id' => 'Thematic ID',
            'task_name' => 'Task Name',
            'task_description' => 'Task Description',
            'mood_id' => 'Mood ID',
        ];
    }

    /**
     * Gets query for [[FavouriteTasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavouriteTasks()
    {
        return $this->hasMany(FavouriteTasks::className(), ['favourite_task_name_id' => 'id_task']);
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
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['task_id' => 'id_task']);
    }
}
