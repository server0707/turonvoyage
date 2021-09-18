<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Uzbimg */
/* @var $form yii\widgets\ActiveForm */

$cate = \app\models\Uzb::find()->all();
$data = \yii\helpers\ArrayHelper::map($cate,'id','name_uz');
?>

<div class="uzbimg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cate')->dropDownList($data); ?>
	
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
