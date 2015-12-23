<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "{{%contestant}}".
 *
 * @property string $id
 * @property string $name
 * @property string $intro
 * @property string $thumb
 * @property integer $ord
 * @property integer $shares
 * @property integer $votes
 * @property integer $views
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $updated_at
 * @property integer $created_at
 */
class Contestant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%contestant}}';
    }
    
    /**
     * create_time, update_time to now()
     * crate_user_id, update_user_id to current login user id
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['intro'], 'string'],
            [['ord', 'shares', 'votes', 'votes_virtual', 'views', 'created_by', 'updated_by', 'updated_at', 'created_at'], 'integer'],
            [['name', 'thumb','image'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '姓名',
            'intro' => '简介',
            'thumb' => '缩略图封面',
            'ord' => '排序，数字越大越靠前',
            'shares' => '分享数',
            'votes' => '真实票数',
            'votes_virtual' => '虚假票数',
            'views' => '浏览数',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
    public function getImages(){
        return $this->hasMany(ContestantImage::className(), ['contestant_id' => 'id']);
    }
}
