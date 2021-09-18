<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Travels */
/* @var $form yii\widgets\ActiveForm */
$cate = \app\models\Category::find()->all();
$data = \yii\helpers\ArrayHelper::map($cate,'id','name_uz');
?>

<div class="travels-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'cate')->dropDownList($data); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'day_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'day_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'day_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reyting')->textInput() ?>

    <p><b>Yulduzlar sonini kiriting!</b></p>
    <?= Html::activeDropDownList($model,'star',['1' =>"1 yulduzli",'2'=>'2 yulduzli','3' =>"3 yulduzli",'4'=>'4 yulduzli','5'=>'5 yulduzli'],['class'=> 'form-control']); ?>
    <p></p>
    <?= $form->field($model, 'summa')->textInput() ?>


    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>
    <?= $form->field($model, 'count')->hiddenInput(['value'=>'1']) ?>

    <?php ActiveForm::end(); ?>

</div>
