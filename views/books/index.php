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

//$this->title = '图书列表';
$this->title = Yii::t('app', 'books');
$this->params['breadcrumbs'][] = $this->title;
?>


<h1>Books</h1>

<p>
    <?= Html::a('添加', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $books,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'name:text:书名', // 属性名:格式:自定义列名
        'author:text:作者',
        [
            'attribute' => 'create_time',
            'label' => '录入时间',
            'value' => function ($model) {
                return Yii::$app->formatter->asDatetime($model->create_time, 'yyyy年MM月dd, HH:mm:ss');
            }
        ],
        'update_time:datetime:更新时间',

        [
            'class' => 'yii\grid\ActionColumn',
            'header' => '更多操作',

            'buttons' => [
                'view' => function ($url, $model, $key) {
                    return Html::a('<i class="glyphicon glyphicon-eye-open"></i> 查看',
                        ['view', 'id' => $key],
                        ['class' => 'btn btn-default btn-xs']);
                },
                'delete' => function ($url, $model, $key) {
                    return Html::a('<i class="glyphicon glyphicon-trash"></i> 删除',
                        ['delete', 'id' => $key],
                        ['class' => 'btn btn-default btn-xs',
                            'data' => ['confirm' => '你确定要删除此项数据有吗？',]
                        ]);
                },
                'update' => function ($url, $model, $key) {
                    return Html::a('<i class="glyphicon glyphicon-pencil"></i> 更新',
                        ['update', 'id' => $key],
                        ['class' => 'btn btn-default btn-xs']);
                },
            ]
        ],
    ],
    'layout' => "{items}\n{pager}",
    'pager' => [
        'hideOnSinglePage' => false,
    ],
]) ?>


