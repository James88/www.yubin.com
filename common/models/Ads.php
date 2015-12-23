<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
//use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "{{%ads}}".
 *
 * @property string $id
 * @property integer $place
 * @property string $thumb
 * @property string $title
 * @property string $intro
 * @property string $url
 * @property integer $ord
 * @property string $updated_at
 * @property string $created_at
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ads}}';
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
            [['place', 'thumb'], 'required'],
            [['place', 'ord'], 'integer'],
            [['intro'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['thumb', 'url'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'place' => '位置',
            'thumb' => '图片',
            'title' => '标题',
            'intro' => '简介',
            'url' => '网址',
            'ord' => '排序,数字越小越靠前',
            'updated_at' => '修改时间',
            'created_at' => '添加时间',
        ];
    }
}
