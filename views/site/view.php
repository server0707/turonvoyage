<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Uzbimg;
use app\models\Photo;
use app\models\Otel;
$this->title =$uzb[$name];
$title = "title_";
$title .= Yii::$app->language;
$obzor = array('title_uz'=>'FOTOSURAT','title_ru'=>'ФОТООБЗОР','title_en'=>'PHOTO REVIEW');
$otel = array('title_uz'=>'MEHMONXONALAR','title_ru'=>'ГОСТИНИЦЫ','title_en'=>'HOTELS');
$otp =array('title_uz'=>'Buyurtma uchun so`rov','title_ru'=>'Заявка на бронирование','title_en'=>'Booking request');
$otps =array('title_uz'=>'Hali ham savollaringiz bormi?','title_ru'=>'Остались вопросы? ','title_en'=>'Still have questions?');
?>
</div>
<div class="site-about">
    
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9108da033e2195d269db93b355af1813b9cd1b9528fd56055ee255b970031ad9&amp;source=constructor" width="100%" height="574" frameborder="0"></iframe>
    
<a style="font-size: 25px;float: right;" class="btn btn-danger" href="<?=\yii\helpers\Url::to(['aloqa/create'])?>"> <?=$otp[$title]?> </a>
    <div class="container">
        
<h2><b style="color:#0088cc"><?=$uzb[$name]?></b> | <b style="color:green"><?=$uzb[$day]?> | $<?=$uzb['summa']?> </b>
  <div style="color: black" class="rating rating_<?=$uzb['star']?>">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <b style="color: rgba(6,16,15,0.87)">  / <?=$uzb['reyting']?> Рейтинг</b>
  </div>
</h2>
<hr>
<div class="row">
  <div class="col-md-6">
    <p><?=$uzb[$text]?></p>
  </div>
  <div class="col-md-6">
    <img src="<?=Yii::$app->request->baseUrl?>/travels/<?=$uzb['img']?>" class="img-thumbnail" alt="Forest" style="width: 100%;">
  </div>
</div>

<?php
$photos = Photo::find()->where(['cate'=>$uzb['id']])->all();
if($photos){
?>
<h3 style="text-align: center;"><b style="color:#0088cc"><?=$obzor[$title]?></b></h3>
<?php
foreach ($photos as $photo) {  ?>
<div class="col-md-4">
  <img src="<?=Yii::$app->request->baseUrl?>/photo/<?=$photo['img']?>" class="img-thumbnail" alt="Forest" style="width: 100%;height: 250px">
</div>
<?php }
}?>

<?php
$otels = Otel::find()->where(['cate'=>$uzb['id']])->all();
if($photos){
?>
<h3 style="text-align: center;margin-top: 300px"><b style="color:#0088cc"><?=$otel[$title]?></b></h3>
<?php
foreach ($otels as $otel) {  ?>
<div class="col-md-4">
  <img src="<?=Yii::$app->request->baseUrl?>/otel/<?=$otel['img']?>" class="img-thumbnail" alt="Forest" style="width: 100%;height: 250px">
</div>
<?php }
}?>

<h2 style="text-align: center;margin-top: 300px"><?=$otps[$title]?>&nbsp; &nbsp; &nbsp;<a style="font-size: 30px" class="btn btn-danger" href="<?=\yii\helpers\Url::to(['aloqa/create'])?>"> <?=$otp[$title]?> </a> &nbsp; &nbsp; &nbsp; +998 99 046-93-43</h2>

</div>
</div>