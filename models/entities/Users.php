<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id ИД
 * @property string $login Логин
 * @property string $password Паспорт
 * @property int $id_role ИД роли
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
            [['login', 'password','id_role'], 'required'],
			[['id_role'],'integer'],
            [['login', 'password'], 'string', 'max' => 255],
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
			'id_role'=>'Id Role',
        ];
    }
}
