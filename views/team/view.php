<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Team */

$this->title = '';
\yii\web\YiiAsset::register($this);

?>
<div class="team-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
                'format'=>['image',['width'=>300,'height'=>250]],
                'value'=>'/web/team/'.$model->img
            ],
            'name_uz',
            'name_ru',
            'name_en',
            'lavozim_uz',
            'lavozim_ru',
            'lavozim_en',
            'img',
        ],
    ]) ?>

</div>
