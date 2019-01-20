<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 0:49
 */

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use Yii;

class Books extends ActiveRecord
{
    public static function tableName()
    {
        //默认连接 book 表名；
        // 此处修改自定义表名
        return 't_books';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'create_time',
                'updatedAtAttribute' => 'update_time',
                //'attributes' => [
                //    // 创建时更新 到 create_time 和 update_time 字段
                //    ActiveRecord::EVENT_BEFORE_INSERT => ['create_time', 'update_time'],
                //    // 修改时的更新时间
                //    ActiveRecord::EVENT_BEFORE_UPDATE => ['update_time']
                //],
                'value' => date('Y-m-d H:i:s')
            ]
        ];
    }

    public function rules()
    {
        return [
            [['name', 'author'], 'required'],
            [['name'], 'string', 'max' => 20],
            [['author'], 'string', 'max' => 20],
            [['desc'], 'string', 'max' => 255],
            [['price'], 'number', 'max' => 10000], // 最大值
            [['total'], 'integer', 'max' => 50]
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'bookName'),
            'author' => Yii::t('app', 'bookAuthor'),
            'price' => Yii::t('app', 'price'),
            'desc' => Yii::t('app', 'bookDesc'),
        ];
    }
}