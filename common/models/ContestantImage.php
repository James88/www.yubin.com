<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%contestant_image}}".
 *
 * @property integer $id
 * @property integer $contestant_id
 * @property string $filename
 * @property string $description
 * @property string $image
 * @property string $thumb
 * @property integer $sort_order
 * @property integer $created_at
 */
class ContestantImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%contestant_image}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contestant_id'], 'required'],
            [['contestant_id', 'sort_order', 'created_at'], 'integer'],
            [['filename'], 'string', 'max' => 128],
            [['description', 'image', 'thumb'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contestant_id' => 'Contestant ID',
            'filename' => 'Filename',
            'description' => 'Description',
            'image' => 'Image',
            'thumb' => 'Thumb',
            'sort_order' => 'Sort Order',
            'created_at' => 'Created At',
        ];
    }
}
