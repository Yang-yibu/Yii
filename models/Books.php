<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 0:49
 */
namespace app\models;

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
            'name'   => Yii::t('app', 'bookName'),
            'author' => Yii::t('app', 'bookAuthor'),
            'price'  => Yii::t('app', 'price'),
            'desc'   => Yii::t('app', 'bookDesc'),
        ];
    }
}