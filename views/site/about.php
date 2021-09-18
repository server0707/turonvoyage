<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$title = "title_";
$title .= Yii::$app->language;
$team = array('title_uz'=>'BIZNING JAMOAMIZ','title_ru'=>'НАША КОМАНДА','title_en'=>'OUR TEAM');
$team1 = array('title_uz'=>'Biz bilan ishlash,qulay, qiziqarli va foydali bo\'lish uchun hamma narsani qilamiz.','title_ru'=>'Мы сделаем все, чтобы Вам было удобно, интересно и выгодно работать с нами.','title_en'=>'We will do everything to make it convenient, interesting and profitable for you to work with us.');
$partner = array('title_uz'=>'HAMKORLAR','title_ru'=>'ПАРТНЕРЫ','title_en'=>'PARTNERS');
$about = array('title_uz'=>'KOMPANIYA HAQIDA','title_ru'=>'О КОМПАНИИ','title_en'=>'ABOUT COMPANY');


?>
</div>
<div class="site-about">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5aae7629f78e64aa50de413f876111903cc7a5407b13464e33d06d9844c9d92c&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
    <h2 class="" style="font-size: 23px;color: #0088cc;text-align: center"><b><?=$about[$title]?></b></h2>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
   <div class="row" style="padding:10px">

       <div class="col-md-12" style="background-color: #0d6aad;padding: 15px;color: white">
           <h4 style="line-height: 32px;font-size: 16px">
               <p style="color: white"><?=$abouts[$text]?></p>

           </h4></div>
       
   </div>
</div>
<br>
<br>
        <h2 class="" style="font-size: 23px;color: #0088cc;text-align: center"><b><?=$team[$title]?></b></h2>
    <div class="cta1">
    <div class="">
        <center><p style="font-size: 20px;color: black;"><?=$team1[$title]?></p></center>
    </div>

    <div class="container">
        <div class="row">

            <?php foreach($teams as $team){ ?>

                <div class="col-md-3" style="text-align: center">
                    <img src="<?=Yii::$app->request->baseUrl?>/team/<?=$team['img']?>" style="width: 150px;border-radius: 180px;box-shadow: 0 0 2px 3px #ddd;" alt="">
                    <h3 style="color: white;font-size: 17px"><b><?=$team[$name]?></b></h3>
                    <p style="color: white;font-size: 15px"><?=$team[$lavozim]?></p>
                </div>
            <?php }?>

        </div>
    </div>
    <!-- Image by https://unsplash.com/@thanni -->


</div>
</div>
