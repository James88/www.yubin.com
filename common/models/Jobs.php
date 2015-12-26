<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
//use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "{{%jobs}}".
 *
 * @property string $id
 * @property integer $company_id
 * @property string $zhiweiming
 * @property string $gongzuodiqu
 * @property string $zhiweixinzi
 * @property string $xueliyaoqiu
 * @property string $zhaopinrenshu
 * @property string $gongzuoxingzhi
 * @property string $xingbieyaoqiu
 * @property string $gongzuojingyan
 * @property string $jingzhengyoushi
 * @property string $zhiweimiaoshu
 * @property integer $create_at
 * @property integer $updated_at
 * @property integer $status
 */
class Jobs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%jobs}}';
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
            [['company_id', 'zhiweiming'], 'required'],
            [['company_id', 'create_at', 'updated_at', 'status'], 'integer'],
            [['zhiweimiaoshu'], 'string'],
            [['zhiweiming', 'gongzuodiqu', 'zhiweixinzi', 'xueliyaoqiu', 'zhaopinrenshu', 'gongzuoxingzhi', 'xingbieyaoqiu', 'gongzuojingyan', 'jingzhengyoushi'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company ID',
            'zhiweiming' => 'Zhiweiming',
            'gongzuodiqu' => 'Gongzuodiqu',
            'zhiweixinzi' => 'Zhiweixinzi',
            'xueliyaoqiu' => 'Xueliyaoqiu',
            'zhaopinrenshu' => 'Zhaopinrenshu',
            'gongzuoxingzhi' => 'Gongzuoxingzhi',
            'xingbieyaoqiu' => 'Xingbieyaoqiu',
            'gongzuojingyan' => 'Gongzuojingyan',
            'jingzhengyoushi' => 'Jingzhengyoushi',
            'zhiweimiaoshu' => 'Zhiweimiaoshu',
            'create_at' => 'Create At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }
}
