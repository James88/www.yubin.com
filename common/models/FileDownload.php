<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
//use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "{{%filedownload}}".
 *
 * @property string $id
 * @property string $title
 * @property string $filepath
 * @property integer $created_at
 * @property integer $updated_at
 */
class FileDownload extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%filedownload}}';
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ],
            //[
            //    'class' => BlameableBehavior::className(),
            //    'updatedByAttribute' => false,
            //],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['title', 'filepath'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'filepath' => 'Filepath',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
