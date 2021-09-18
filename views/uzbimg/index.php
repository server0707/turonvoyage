<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UzbimgSerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
?>
<div class="uzbimg-index">

    <h1 style="text-align: center;color:green">O'zbekistan suratlari</h1>

    <p>
        <?= Html::a('+', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
             [
                'format' => 'raw',
                'label' => 'Maxsulotlar',
                'value'=>function ($data) {
                    $res =\app\models\Uzb::find()->where(['id'=>$data['cate']])->one();
                    return $res['name_uz'];
                },
            ],
             [
                'attribute'=>'img',
                'format'=>'raw',
                'label' => 'Fotosurat',
                'value'=>function ($data) {

                    return Html::img('/web/photo/'.$data->img, ['width' => '240px']);

                },
                'filter'=>false,
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
