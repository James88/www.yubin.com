<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
//use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "{{%jianli}}".
 *
 * @property string $id
 * @property string $xingming
 * @property string $xingbie
 * @property string $nianling
 * @property string $xueli
 * @property string $xiangguanzhengshu
 * @property string $yingpingzhiwei
 * @property string $qiwangxinzi
 * @property string $gerenjianjie
 * @property string $qitayaoqiu
 * @property string $lianxidianhua
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $end_at
 * @property integer $views
 * @property string $author
 * @property string $jobtype
 */
class Jianli extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%jianli}}';
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
            [['xingming'], 'required'],
            [['created_at', 'updated_at', 'end_at', 'views'], 'integer'],
            [['xingming', 'xingbie', 'nianling', 'xueli', 'xiangguanzhengshu', 'yingpingzhiwei', 'qiwangxinzi', 'gerenjianjie', 'qitayaoqiu', 'lianxidianhua', 'author', 'jobtype'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'xingming' => 'Xingming',
            'xingbie' => 'Xingbie',
            'nianling' => 'Nianling',
            'xueli' => 'Xueli',
            'xiangguanzhengshu' => 'Xiangguanzhengshu',
            'yingpingzhiwei' => 'Yingpingzhiwei',
            'qiwangxinzi' => 'Qiwangxinzi',
            'gerenjianjie' => 'Gerenjianjie',
            'qitayaoqiu' => 'Qitayaoqiu',
            'lianxidianhua' => 'Lianxidianhua',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'end_at' => 'End At',
            'views' => 'Views',
            'author' => 'Author',
            'jobtype' => 'Jobtype',
        ];
    }
}
