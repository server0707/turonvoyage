<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Slider */

$this->title = '';
?>
<div class="slider-update">

    <h3 style="text-align: center;color: #0a73bb;margin-top: -5px"><b>YANGILASH</b></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
