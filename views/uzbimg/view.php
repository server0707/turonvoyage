<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Uzbimg */

$this->title = '';
\yii\web\YiiAsset::register($this);
?>
<div class="uzbimg-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O`chirish', ['delete', 'id' => $model->id], [
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
                'format' => 'raw',
                'label' => 'Maxsulotlar',
                'value'=>function ($data) {
                    $res =\app\models\Uzb::find()->where(['id'=>$data['cate']])->one();
                    return $res['name_uz'];
                },
            ],
            [
                'attribute'=>'Image',
                'value'=>('/web/photo/' . $model->img),
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
        ],
    ]) ?>

</div>
