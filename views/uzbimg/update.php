<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Uzbimg */

$this->title = '';
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uzbimg-update">

    <h2 style="text-align: center;color:green">YANGILASH</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
