<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/17
 * Time: 23:47
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model {
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'] , 'required'],
            ['email', 'email'],
        ];
    }
}