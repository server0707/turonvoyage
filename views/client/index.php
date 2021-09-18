<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
?>
<div class="client-index">

    <h3 style="text-align: center;color: #0a73bb;margin-top: -5px"><b>SAYOXAT TURLARI</b></h3>

    <p>
        <?= Html::a("Yangini qo'shish", ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name_uz',
            'name_ru',
            'name_en',
            //'text_uz:ntext',
            //'text_ru:ntext',
            //'text_en:ntext',
            //'addres_uz',
            //'addres_ru',
            //'addres_en',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
