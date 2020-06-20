<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "evaluations".
 *
 * @property int $id ИД
 * @property int $id_user ИД пользователя
 * @property int $id_idea_users ИД идеи
 * @property int $id_type ИД типа оценки
 *
 * @property Users $id0
 * @property IdeaUsers $ideaUsers
 * @property Type $type
 */
class Evaluations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evaluations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_idea_users', 'id_type'], 'required'],
            [['id_user', 'id_idea_users', 'id_type'], 'integer'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['id' => 'id']],
            [['id_idea_users'], 'exist', 'skipOnError' => true, 'targetClass' => IdeaUsers::className(), 'targetAttribute' => ['id_idea_users' => 'id_idea_user']],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['id_type' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_idea_users' => 'Id Idea Users',
            'id_type' => 'Id Type',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Users::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[IdeaUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdeaUsers()
    {
        return $this->hasOne(IdeaUsers::className(), ['id_idea_user' => 'id_idea_users']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'id_type']);
    }
}
