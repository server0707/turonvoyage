<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_uz')->textInput() ?>
    <?= $form->field($model, 'title_ru')->textInput() ?>
    <?= $form->field($model, 'title_en')->textInput() ?>
    <?= $form->field($model, 'text_uz')->textInput() ?>
    <?= $form->field($model, 'text_ru')->textInput() ?>
    <?= $form->field($model, 'text_en')->textInput() ?>
    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
