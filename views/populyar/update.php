<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Populyar */

$this->title = 'Yangilash';
?>
<div class="populyar-update">

    <h2 style="text-align: center;color: #0a73bb"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
