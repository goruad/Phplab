<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 
?>

<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'newName') ?>

    <?= $form->field($model, 'newCaption') ?>
	
	<?= Html::encode($errMsg) ?>

    <div class="form-group">
        <?= Html::submitButton('Update', ['class' => 'btn btn-default']) ?>
    </div>

<?php ActiveForm::end(); ?>