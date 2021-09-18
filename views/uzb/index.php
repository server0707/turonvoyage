<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UzbSerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
?>
<div class="uzb-index">

    <h1 style="text-align: center;color:green">O'zbekistan</h1>

    <p>
        <?= Html::a('+', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'text_ru:ntext',
            //'text_en:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
