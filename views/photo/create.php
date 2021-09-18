<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Photo */

$this->title = '';
?>
<div class="photo-create">

    <h3 style="text-align: center;color: #0a73bb;margin-top: -5px"><b>YANGINI QO'SHISH</b></h3>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
