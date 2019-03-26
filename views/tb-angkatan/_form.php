<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbAngkatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-angkatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'angkatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
