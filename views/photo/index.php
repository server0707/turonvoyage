<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OtelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
?>
<div class="photo-index">

    <h3 style="text-align: center;color: #0a73bb;margin-top: -5px"><b>FOTOSURATLAR</b></h3>

    <p>
        <?= Html::a('Yangini qo`shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'img',
                'format'=>'raw',
                'label' => 'Fotosurat',
                'value'=>function ($data) {

                    return Html::img('/web/photo/'.$data->img, ['width' => '240px']);

                },
                'filter'=>false,
            ],
            [
                'format' => 'raw',
                'label' => 'Sayohatlar',
                'value'=>function ($data) {
                    $res =\app\models\Travels::find()->where(['id'=>$data['cate']])->one();
                    return $res['name_uz'];
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
