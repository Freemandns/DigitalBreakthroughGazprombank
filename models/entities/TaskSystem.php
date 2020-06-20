<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "task_system".
 *
 * @property int $id_task_system
 * @property int $task_system_user_id
 * @property int $task_id_system
 * @property int $status_task_system_id
 */
class TaskSystem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task_system';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_system_user_id', 'task_id_system', 'status_task_system_id'], 'required'],
            [['task_system_user_id', 'task_id_system', 'status_task_system_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_task_system' => 'Id Task System',
            'task_system_user_id' => 'Task System User ID',
            'task_id_system' => 'Task Id System',
            'status_task_system_id' => 'Status Task System ID',
        ];
    }
}
