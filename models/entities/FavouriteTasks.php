<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "favourite_tasks".
 *
 * @property int $id_favourite_task
 * @property int $favourite_task_name_id
 * @property int $user_id
 *
 * @property Tasks $favouriteTaskName
 * @property Users $user
 * @property Users[] $users
 */
class FavouriteTasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'favourite_tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['favourite_task_name_id', 'user_id'], 'required'],
            [['favourite_task_name_id', 'user_id'], 'integer'],
            [['favourite_task_name_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tasks::className(), 'targetAttribute' => ['favourite_task_name_id' => 'id_task']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_favourite_task' => 'Id Favourite Task',
            'favourite_task_name_id' => 'Favourite Task Name ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[FavouriteTaskName]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavouriteTaskName()
    {
        return $this->hasOne(Tasks::className(), ['id_task' => 'favourite_task_name_id']);
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
        return $this->hasMany(Users::className(), ['favourite_task_id' => 'id_favourite_task']);
    }
}
