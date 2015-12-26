<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
//use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "{{%goods}}".
 *
 * @property string $id
 * @property string $name
 * @property string $guige
 * @property string $danwei
 * @property double $price
 * @property string $beizhu
 * @property integer $created_at
 * @property integer $updated_at
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
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
            [['name'], 'required'],
            [['price'], 'number'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'guige', 'danwei'], 'string', 'max' => 200],
            [['beizhu'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '商品名',
            'guige' => '规格下/型号',
            'danwei' => 'Danwei',
            'price' => '价格单位元',
            'beizhu' => 'Beizhu',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
