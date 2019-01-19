<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 1:08
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\grid\GridView;

?>
<h1>Books</h1>
<?= GridView::widget([
    'dataProvider' => $books,
    'columns' => [
        'id:text:ID',
        'name:text:书名', // 属性名:格式:自定义列名
        'author:text:作者',
        [
            'attribute' => 'create_time',
            'label' => '录入时间',
            'value' => function ($model) {
                return Yii::$app->formatter->asDatetime($model->create_time, 'yyyy年MM月dd, HH:mm:ss');
            }
        ],
        'update_time:datetime:更新时间'
    ],
    //'layout'=> '{items}{pager}',
    'pager' => [
        //'options'=>['class'=>'hidden'],
        'hideOnSinglePage' => true,
        'firstPageLabel'=>"First",
        'prevPageLabel'=>'Prev',
        'nextPageLabel'=>'Next',
        'lastPageLabel'=>'Last',
    ],
]) ?>


