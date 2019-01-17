<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 0:00
 */

use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>email</label>: <?= Html::encode($model->email) ?></li>
</ul>

