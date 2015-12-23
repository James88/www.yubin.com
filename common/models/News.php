<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
//use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "{{%news}}".
 *
 * @property string $id
 * @property integer $category_id
 * @property string $title
 * @property string $thumb
 * @property string $keyword
 * @property string $description
 * @property string $intro
 * @property string $content
 * @property string $author
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%news}}';
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
            [['category_id', 'title', 'content'], 'required'],
            [['category_id', 'status','created_at', 'updated_at'], 'integer'],
            [['description', 'intro', 'content'], 'string'],
            [['title', 'keyword'], 'string', 'max' => 100],
            [['thumb'], 'string', 'max' => 120],
            [['author'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => '所属栏目',
            'title' => '标题',
            'thumb' => '缩略图',
            'keyword' => '关键词',
            'description' => '描述',
            'intro' => '简介',
            'content' => '内容',
            'author' => '作者',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '修改时间',
        ];
    }
    
    public function getCategory(){
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }
}