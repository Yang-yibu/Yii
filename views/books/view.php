<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/19
 * Time: 12:48
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model -> name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'books'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="books-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'author',
            'price',
            'desc',
        ]
    ])?>
</div>
