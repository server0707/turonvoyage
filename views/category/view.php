<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = '';

\yii\web\YiiAsset::register($this);
?>
<div class="category-view">


    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a("O'chirish", ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=>'Sayohat surati',
                'format'=>['image',['width'=>350,'height'=>250]],
                'value'=>'/web/category/'.$model->img
            ],
            'name_uz',
            'name_ru',
            'name_en',

        ],
    ]) ?>

</div>
