<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Otel */

$this->title = '';
?>
<div class="otel-create">

    <h3 style="text-align: center;color: #0a73bb;margin-top: -5px"><b>YANGI SURAT QO'SHISH</b></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
