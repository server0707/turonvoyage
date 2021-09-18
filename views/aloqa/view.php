<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aloqa */

$this->title = '';
\yii\web\YiiAsset::register($this);
$title1 = "title_";
$title1 .= Yii::$app->language;
$obzor = array('title_uz'=>'So`rov qabul qilindi','title_ru'=>'Запрос был принят','title_en'=>'The request was accepted');
?>
</div>
<hr>
<div class="container">
<div class="aloqa-view">
    <div class="alert-dark" style="color:white;padding: 5px;background-color: #0088cc">
        <h3><i class="fa fa-check" aria-hidden="true"></i> <?=$obzor[$title1]?></h3>
    </div>
<br><br>
   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'name',
            'email:email',
            'phone',
            'message:ntext',
        ],
    ]) ?>

</div>
</div>