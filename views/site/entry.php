<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 0:00
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')?>
<?= $form->field($model, 'email')?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class'=>'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>