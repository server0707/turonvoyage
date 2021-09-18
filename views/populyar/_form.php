<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Populyar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="populyar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo $form->field($model, 'image')->widget(\kartik\file\FileInput::class, [
        'options' => ['accept' => 'image/*',
            'multiple'=>false
        ],
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
