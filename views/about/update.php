<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\About */

$this->title = '';
?>
<div class="about-update">

    <h2 style="text-align: center;">Ma'lumotlarni yangilash</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
