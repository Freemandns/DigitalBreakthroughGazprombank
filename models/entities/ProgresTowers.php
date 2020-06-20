<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "progres_towers".
 *
 * @property int $id_towerp
 * @property string $towerp_name
 */
class ProgresTowers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'progres_towers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['towerp_name'], 'required'],
            [['towerp_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_towerp' => 'Id Towerp',
            'towerp_name' => 'Towerp Name',
        ];
    }
}
