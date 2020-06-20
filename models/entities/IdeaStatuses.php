<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "idea_statuses".
 *
 * @property int $id_idea_status
 * @property string $idea_status_name
 *
 * @property IdeaUsers[] $ideaUsers
 */
class IdeaStatuses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'idea_statuses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idea_status_name'], 'required'],
            [['idea_status_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_idea_status' => 'Id Idea Status',
            'idea_status_name' => 'Idea Status Name',
        ];
    }

    /**
     * Gets query for [[IdeaUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdeaUsers()
    {
        return $this->hasMany(IdeaUsers::className(), ['status_id' => 'id_idea_status']);
    }
}
