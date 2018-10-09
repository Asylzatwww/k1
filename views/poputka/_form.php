<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Poputka */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poputka-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'seats')->textInput() ?>

    <?= $form->field($model, 'timeToLive')->textInput() ?>

    <?= $form->field($model, 'fromLocation')->textInput() ?>

    <?= $form->field($model, 'toLocation')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
