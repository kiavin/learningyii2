<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\password\PasswordInput;

/** @var yii\web\View $this */
/** @var app\modules\Teachers\models\Teachers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(['options' =>['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->widget(PasswordInput::class,
[
    'pluginOptions' => [
        'showMeter' => true,
        'toggleMask' => false
    ]]); ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'user_img')->fileInput();?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
