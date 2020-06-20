<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "favorite_ideas".
 *
 * @property int $id_fav_idea
 * @property int $name_fav_idea_id
 * @property int $user_id
 *
 * @property IdeaUsers $nameFavIdea
 * @property Users $user
 * @property Users[] $users
 */
class FavoriteIdeas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'favorite_ideas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_fav_idea_id', 'user_id'], 'required'],
            [['name_fav_idea_id', 'user_id'], 'integer'],
            [['name_fav_idea_id'], 'exist', 'skipOnError' => true, 'targetClass' => IdeaUsers::className(), 'targetAttribute' => ['name_fav_idea_id' => 'id_idea_user']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fav_idea' => 'Id Fav Idea',
            'name_fav_idea_id' => 'Name Fav Idea ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[NameFavIdea]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNameFavIdea()
    {
        return $this->hasOne(IdeaUsers::className(), ['id_idea_user' => 'name_fav_idea_id']);
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
        return $this->hasMany(Users::className(), ['favourite_idea_id' => 'id_fav_idea']);
    }
}
