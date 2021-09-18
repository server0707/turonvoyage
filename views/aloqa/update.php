<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aloqa */

$this->title = 'Update Aloqa: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Aloqas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aloqa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
