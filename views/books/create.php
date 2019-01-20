<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/19
 * Time: 12:49
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="class-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="country-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')
            ->textInput(['maxlength' => true])
        ?>

        <?= $form->field($model, 'author')
            ->textInput(['maxlength' => true])
        ?>

        <?= $form->field($model, 'price')
            ->textInput(['maxlength' => true])
        ?>

        <?= $form->field($model, 'desc')
            ->textarea(['maxlength' => true])
        ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'save'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
