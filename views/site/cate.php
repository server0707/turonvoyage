<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2/27/2020
 * Time: 11:55 AM
 */
$title = "title_";
$title .= Yii::$app->language;
$xorazm = array('title_uz'=>'XORAZMDAN ENG YONAYOTGAN SAYOHATLAR','title_ru'=>'САМЫЕ ГОРЯЩИЕ ТУРЫ ИЗ ХОРЕЗМА','title_en'=>'THE MOST RECENT TOURS FROM KHOREZM');
$klent = array('title_uz'=>'MIJOZLARIMIZ BIZ HAQIMIZDA NIMA DEYISHADI','title_ru'=>'ЧТО ГОВОРЯТ О НАС НАШИ КЛИЕНТЫ','title_en'=>'WHAT OUR CUSTOMERS SAY ABOUT US');

?>
</div>
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9108da033e2195d269db93b355af1813b9cd1b9528fd56055ee255b970031ad9&amp;source=constructor" width="100%" height="574" frameborder="0"></iframe>
<div class="offers">

    <div class="container" style="margin-top: -60px">
        <div class="row">
            <div class="col text-center">
                <h2 class="intro_title text-center" style="font-size: 23px;color: #0088cc"><b><?=$cate[$name]?></b></h2>
            </div>
        </div>
        <div class="row" >
            <?php foreach ($event as $item){ ?>
                <div class="col-md-4" style="margin-top: 20px">
                    <div class="gallery" style="box-shadow: 0px 15px 10px -15px #111">
                        <a  style="text-decoration: none" href="<?=\yii\helpers\Url::to(['site/view?id='.$item['id']])?>">
                            <div style="padding: 20px;"><p style="background-color: #0088cc;color: white;width:150px;text-align: center;border-radius: 5px"><?=$item[$day]?></p></div>
                            <img src="<?=Yii::$app->request->baseUrl?>/travels/<?=$item['img']?>" class="image" alt="Forest" style="width: 100%;height: 230px;margin-top: -77px ">


                            <div class="row desc">
                                <div class="col-md-8"><h5 style="color: rgba(6,16,15,0.87);font-size: 16px"><b><?=$item[$name]?></b></h5>
                                    <div style="color: black" class="rating rating_<?=$item['star']?>">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <b style="color: rgba(6,16,15,0.87)">  / <?=$item['reyting']?> Рейтинг</b>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <i style="font-size: 17px;color: black;margin-bottom: 7px;float: right" class="fa fa-heart-o"></i>
                                    <br>
                                    <h5 style="font-size: 15px;float: right;margin-left: 20px;color: #2b669a"><b>$ USD <?=$item['summa']?></b></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php }?>

        </div>
    </div>
</div>
<div class="testimonials">
    <div class="test_border"></div>
    <div class="container" style="margin-top: -20px">
        <div class="row">
            <div class="col text-center">
                <h2 class="intro_title text-center" style="font-size: 23px;color: #0088cc"><b><?=$klent[$title]?></b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Testimonials Slider -->

                <div class="test_slider_container">
                    <div class="owl-carousel owl-theme test_slider">
                        <?php foreach ($client as $item) {?>
                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img style="height: 250px" src="<?=Yii::$app->request->baseUrl?>/client/<?=$item['img']?>" alt="https://unsplash.com/@tschax"></div>
                                    <div class="test_icon"><img src="<?=Yii::$app->request->baseUrl?>/travelix/images/island_t.png" alt=""></div>
                                    <div class="" style="background:linear-gradient(to top right, #fa9e1b,#0b93d5, #8d4fff)">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name"><?=$item[$name]?></div>
                                                <div class="test_date"><?=$item[$addres]?></div>
                                            </div>
                                            <p class="test_quote_text" style="margin-top: -10px"><?=$item[$text]?></p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
<style>
    div.gallery {

        background-color: white;
        float: left;

    }
    .image{
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        color: #2b669a;
        border-radius:4px 4px 0px 0px;
        transition: .10s ease;
        backface-visibility: hidden;
    }
    .image1{
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        color: #2b669a;
        border-radius:6px 6px 6px 6px;
        transition: .10s ease;
        backface-visibility: hidden;
    }
    div.gallery:hover {
        border: 0px solid white;
    }

    div.gallery img {

        height: auto;
    }
    .col-md-4:hover .image {
        opacity: 1;

    }
    div.desc {
        padding: 10px;

    }

</style>

<style>

    figure {

        border-radius: 6px;
        background-color: #1a1a1a;
        overflow: hidden;
        color: white;
    }
    figure:hover+span {
        bottom: -36px;
        opacity: 1;
        color: white;
    }

    /* Sepia */
    .hover12 figure img {
        opacity: 1;
        color: white;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .hover12 figure:hover img {
        opacity: 0.6;
        color: white;

    }

</style>