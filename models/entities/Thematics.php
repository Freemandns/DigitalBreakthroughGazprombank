<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "thematics".
 *
 * @property int $id_thematic
 * @property string $thematic_name
 *
 * @property IdeaUsers[] $ideaUsers
 */
class Thematics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thematics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thematic_name'], 'required'],
            [['thematic_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_thematic' => 'Id Thematic',
            'thematic_name' => 'Наименование тематики',
        ];
    }

    /**
     * Gets query for [[IdeaUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdeaUsers()
    {
        return $this->hasMany(IdeaUsers::className(), ['thematic_id' => 'id_thematic']);
    }
}
