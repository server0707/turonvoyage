<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravelsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travels-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'day_uz') ?>

    <?php // echo $form->field($model, 'day_ru') ?>

    <?php // echo $form->field($model, 'day_en') ?>

    <?php // echo $form->field($model, 'reyting') ?>

    <?php // echo $form->field($model, 'star') ?>

    <?php // echo $form->field($model, 'summa') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
