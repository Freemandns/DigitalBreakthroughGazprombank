<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $email
 * @property string $firstname
 * @property string $surname
 * @property string|null $patronymic
 * @property string|null $avatar
 * @property int $role_id
 * @property int $position_id
 * @property int $department_id
 * @property int|null $rating
 * @property int|null $achievement_id
 * @property int|null $gazprom_coin
 * @property int|null $favourite_idea_id
 * @property int|null $idea_user_id
 * @property int $tower_level_id
 * @property int|null $tower_progress
 * @property string|null $date_coin Дата сбора коинов
 *
 * @property AchievementsUnification[] $achievementsUnifications
 * @property Evaluations $evaluations
 * @property FavoriteIdeas[] $favoriteIdeas
 * @property IdeaUsers[] $ideaUsers
 * @property StoreUnification[] $storeUnifications
 * @property Positions $position
 * @property TowerLevels $towerProgress
 * @property Department $department
 * @property AchievementsUnification $achievement
 * @property TowerLevels $towerLevel
 * @property Roles $role
 * @property FavoriteIdeas $favouriteIdea
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password', 'email', 'firstname', 'surname', 'role_id', 'position_id', 'department_id', 'tower_level_id'], 'required'],
            [['role_id', 'position_id', 'department_id', 'rating', 'achievement_id', 'gazprom_coin', 'favourite_idea_id', 'idea_user_id', 'tower_level_id', 'tower_progress'], 'integer'],
            [['date_coin'], 'safe'],
            [['login', 'password', 'email', 'firstname', 'surname', 'patronymic', 'avatar'], 'string', 'max' => 255],
            [['login'], 'unique'],
            [['position_id'], 'exist', 'skipOnError' => true, 'targetClass' => Positions::className(), 'targetAttribute' => ['position_id' => 'id_position']],
            [['tower_progress'], 'exist', 'skipOnError' => true, 'targetClass' => TowerLevels::className(), 'targetAttribute' => ['tower_progress' => 'id_tower_level']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id_department']],
            [['achievement_id'], 'exist', 'skipOnError' => true, 'targetClass' => AchievementsUnification::className(), 'targetAttribute' => ['achievement_id' => 'id']],
            [['tower_level_id'], 'exist', 'skipOnError' => true, 'targetClass' => TowerLevels::className(), 'targetAttribute' => ['tower_level_id' => 'id_tower_level']],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['role_id' => 'id_role']],
            [['favourite_idea_id'], 'exist', 'skipOnError' => true, 'targetClass' => FavoriteIdeas::className(), 'targetAttribute' => ['favourite_idea_id' => 'id_fav_idea']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email',
            'firstname' => 'Firstname',
            'surname' => 'Фамилия',
            'patronymic' => 'Patronymic',
            'avatar' => 'Avatar',
            'role_id' => 'Role ID',
            'position_id' => 'Position ID',
            'department_id' => 'Department ID',
            'rating' => 'Rating',
            'achievement_id' => 'Achievement ID',
            'gazprom_coin' => 'Gazprom Coin',
            'favourite_idea_id' => 'Favourite Idea ID',
            'idea_user_id' => 'Idea User ID',
            'tower_level_id' => 'Tower Level ID',
            'tower_progress' => 'Tower Progress',
            'date_coin' => 'Date Coin',
        ];
    }

    /**
     * Gets query for [[AchievementsUnifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAchievementsUnifications()
    {
        return $this->hasMany(AchievementsUnification::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Evaluations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluations()
    {
        return $this->hasOne(Evaluations::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[FavoriteIdeas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavoriteIdeas()
    {
        return $this->hasMany(FavoriteIdeas::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[IdeaUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdeaUsers()
    {
        return $this->hasMany(IdeaUsers::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[StoreUnifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStoreUnifications()
    {
        return $this->hasMany(StoreUnification::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Position]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Positions::className(), ['id_position' => 'position_id']);
    }

    /**
     * Gets query for [[TowerProgress]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTowerProgress()
    {
        return $this->hasOne(TowerLevels::className(), ['id_tower_level' => 'tower_progress']);
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id_department' => 'department_id']);
    }

    /**
     * Gets query for [[Achievement]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAchievement()
    {
        return $this->hasOne(AchievementsUnification::className(), ['id' => 'achievement_id']);
    }

    /**
     * Gets query for [[TowerLevel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTowerLevel()
    {
        return $this->hasOne(TowerLevels::className(), ['id_tower_level' => 'tower_level_id']);
    }

    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Roles::className(), ['id_role' => 'role_id']);
    }

    /**
     * Gets query for [[FavouriteIdea]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavouriteIdea()
    {
        return $this->hasOne(FavoriteIdeas::className(), ['id_fav_idea' => 'favourite_idea_id']);
    }
}
