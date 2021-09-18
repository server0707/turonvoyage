<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Slider */

$this->title = '';
\yii\web\YiiAsset::register($this);
?>
<div class="slider-view">

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
            'title_uz','title_ru','title_en','text_uz','text_ru','text_en',
            [
                'attribute'=>'Sayohat surati',
                'format'=>['image',['width'=>450,'height'=>250]],
                'value'=>'/web/slider/'.$model->img
            ],
        ],
    ]) ?>

</div>
