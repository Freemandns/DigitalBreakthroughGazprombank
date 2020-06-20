<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id_comment
 * @property string $text_comment
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_comment'], 'required'],
            [['text_comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_comment' => 'Id Comment',
            'text_comment' => 'Text Comment',
        ];
    }
}
