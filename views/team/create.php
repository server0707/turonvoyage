<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Team */
$this->title = '';

?>
<div class="team-create">

    <h3 style="text-align: center;color: #0a73bb"><b>YANGI JAMOA AZOSINI KIRITISH</b></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
