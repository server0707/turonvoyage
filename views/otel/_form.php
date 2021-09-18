<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Photo */
/* @var $form yii\widgets\ActiveForm */

$cate = \app\models\Travels::find()->all();
$data = \yii\helpers\ArrayHelper::map($cate,'id','name_uz');
$post = Yii::$app->request->post('cate');
?>

<div class="photo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    if($post){
    ?>
        <?= $form->field($model, 'cate')->textInput(['value' => $post,'readonly'=>'readonly']) ?>

    <?php }
    else{
    ?>
        <?= $form->field($model, 'cate')->dropDownList($data); ?>

    <?php }?>
    <?php
    echo $form->field($model, 'image')->widget(\kartik\file\FileInput::class, [
        'options' => ['accept' => 'image/*',
            'multiple'=>true
        ],
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
