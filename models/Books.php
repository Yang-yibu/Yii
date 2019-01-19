<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 0:49
 */
namespace app\models;

use yii\db\ActiveRecord;

class Books extends ActiveRecord
{
    public static function tableName()
    {
        //默认连接 book 表名；
        // 此处修改自定义表名
        return 't_books';
    }
}