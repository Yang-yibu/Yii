<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 1:08
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Books</h1>
<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <?= Html::encode("{$book->name} ({$book->code})") ?>:
            <?= $book->population ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $book]) ?>

