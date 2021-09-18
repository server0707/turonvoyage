<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
?>
<div class="team-index">

    <h3 style="text-align: center;color: #0a73bb;margin-top: -10px"><b>JAMOA AZOLARI</b></h3>

    <p>
        <?= Html::a("Yangi hodim qo'shish", ['create'], ['class' => 'btn btn-primary']) ?>
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
            'lavozim_uz',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
