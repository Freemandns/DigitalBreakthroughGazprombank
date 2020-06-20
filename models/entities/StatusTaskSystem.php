<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "status_task_system".
 *
 * @property int $id_st_t_syst
 * @property string $st_t_syst_name
 */
class StatusTaskSystem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_task_system';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['st_t_syst_name'], 'required'],
            [['st_t_syst_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_st_t_syst' => 'Id St T Syst',
            'st_t_syst_name' => 'St T Syst Name',
        ];
    }
}
