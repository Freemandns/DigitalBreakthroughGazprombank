<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id_department
 * @property string $department_name
 *
 * @property Users[] $users
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_name'], 'required'],
            [['department_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_department' => 'Id Department',
            'department_name' => 'Department Name',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['department_id' => 'id_department']);
    }
}
