<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Travels */

$this->title = '';
\yii\web\YiiAsset::register($this);
?>
<div class="travels-view">

    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a("O'chirish", ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?php $form = \yii\widgets\ActiveForm::begin(['action' => ['otel/create']]); ?>
        <input type="text" hidden name="cate" value="<?=$model['id']?>">
        <button class="btn btn-primary">Mehmonhona suratlarini biriktirish</button>
        <?php $form = \yii\widgets\ActiveForm::end(); ?>
        <br>
        <?php $form = \yii\widgets\ActiveForm::begin(['action' => ['photo/create']]); ?>
        <input type="text" hidden name="cate" value="<?=$model['id']?>">
        <button class="btn btn-info">Sayohat joyiga qo'shimcha surat qo'shish</button>
        <?php $form = \yii\widgets\ActiveForm::end(); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=>'Sayohat surati',
                'format'=>['image',['width'=>350,'height'=>250]],
                'value'=>'/web/travels/'.$model->img
            ],
            'name_uz',
            'name_ru',
            'name_en',
            'day_uz',
            'day_ru',
            'day_en',
            'reyting',
            'star',
            'summa',

        ],
    ]) ?>

</div>
