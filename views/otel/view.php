<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Otel */

$this->title = '';
\yii\web\YiiAsset::register($this);
?>
<div class="otel-view">

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
                'attribute'=>'image',
                'value'=>('/web/otel/' . $model->img),
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            'cate',
        ],
    ]) ?>

</div>
