<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
//use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "{{%album}}".
 *
 * @property string $id
 * @property string $title
 * @property string $intro
 * @property string $author
 * @property integer $views
 * @property integer $created_at
 * @property integer $updated_at
 */
class Album extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%album}}';
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
            [['views', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['intro'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'intro' => '简介',
            'author' => '作者',
            'views' => '点击量',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
