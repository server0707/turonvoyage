<?php

/* @var $this yii\web\View */


use yii\widgets\ActiveForm;

$this->registerAssetBundle(yii\web\JqueryAsset::className(), \yii\web\View::POS_HEAD);
$title = "title_";
$title .= Yii::$app->language;
$yozuv = array('title_uz'=>'Tour Voyage - dunyoning barcha yo\'nalishlari bo\'yicha sayohatlar','title_ru'=>'Туронвояж - Бронируйте туры из миру по всем направлениям','title_en'=>'Tourvoyage - tours from the world in all directions');
$tur = array('title_uz'=>'TURNI TANLANG','title_ru'=>'ВЫБРАТЬ ТУР','title_en'=>'CHOOSE A TOUR');
$popul = array('title_uz'=>'MASHHUR JOYLAR','title_ru'=>'ПОПУЛЯРНЫЕ НАПРАВЛЕНИЯ','title_en'=>'POPULAR DESTINATION');
$team = array('title_uz'=>'DAM OLISHINGIZNI UNUTILMAS HOLGA KELTIRING!','title_ru'=>'СДЕЛАЕМ ВАШ ОТДЫХ НЕЗАБЫВАЕМЫМ!','title_en'=>'LET\'S MAKE YOUR HOLIDAY UNFORGETTABLE!');
$xorazm = array('title_uz'=>'XORAZMDAN ENG YONAYOTGAN SAYOHATLAR','title_ru'=>'САМЫЕ ГОРЯЩИЕ ТУРЫ ИЗ ХОРЕЗМА','title_en'=>'THE MOST RECENT TOURS FROM KHOREZM');
$klent = array('title_uz'=>'MIJOZLARIMIZ BIZ HAQIMIZDA NIMA DEYISHADI','title_ru'=>'ЧТО ГОВОРЯТ О НАС НАШИ КЛИЕНТЫ','title_en'=>'WHAT OUR CUSTOMERS SAY ABOUT US');
$team1 = array('title_uz'=>'Biz mijozlarimizni xursand qilishni yaxshi ko\'ramiz va siz kutganingizdan ko\'proq narsani taklif qilishga tayyormiz.','title_ru'=>'Мы любим радовать наших клиентов и готовы предложить больше, чем вы ожидаете.','title_en'=>'We love to please our customers and are ready to offer more than you expect.');
$yubor =array('title_uz'=>'Habar yuborildi iltimos kuting!','title_ru'=>'Сообщение отправлено, подождите!','title_en'=>'Message sent, please wait!');
$this->title = 'Туронвояж - Бронируйте туры из миру по всем направлениям';
?>
</div>
<div class="super_container" style="margin-top: -30px">

    <div class="home" >

        <!-- Home Slider -->

        <div class="home_slider_container">


            <div class="owl-carousel owl-theme home_slider">
                <?php foreach ($slider as $slide) {?>
                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <!-- Image by https://unsplash.com/@anikindimitry -->
                    <div class="home_slider_background" style="background-image:url(<?=Yii::$app->request->baseUrl?>/slider/<?=$slide['img']?>)"></div>

                    <div class="home_slider_content text-center" >
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1><?=$slide[$title]?></h1>
                            <h1><?=$slide[$text]?></h1>
                            <br>

                            <br><a href="<?=\yii\helpers\Url::to(['site/category?id=1'])?>" class="btn btn-primary" style="padding: 8px 50px 8px 50px;"><?=$tur[$title]?></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            <!-- Home Slider Dots -->

        </div>

    </div>
    </div>

 
    
  

    <!-- Intro -->
    <?php
    if($event){
    ?>
    <div class="offers" style="margin-top: -280px">
        <div class="container" style="margin-top: -20px">
            <div class="row">
                <div class="col text-center">
                    <h2 class="intro_title text-center" style="font-size: 23px;color: #0088cc"><b><?=$xorazm[$title]?></b></h2>
                </div>
            </div>
            <div class="row" style="margin-top: 35px">
               <?php foreach ($event as $item){ ?>
                <div class="col-md-4" style="margin-top: 20px">
                    <div class="gallery " style="box-shadow: 0px 15px 10px -15px #111">
                        <a style="text-decoration: none" href="<?=\yii\helpers\Url::to(['site/view?id='.$item['id']])?>">
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
                                    <h5 style="font-size: 15px;float: right;margin-left: 20px;color: #2b669a"><b>USD <?=$item['summa']?></b></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php }?>

            </div>
        </div>
    </div>
<?php }?>

    <!-- CTA -->



    <!-- Offers -->


    <!-- Testimonials -->
 <?php
    if($client){
    ?>
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
<?php }?>

    <div class="contact">

        <br>

        <div class="contact_background" style="background-image:url(<?=Yii::$app->request->baseUrl?>/travelix/images/contact.png)"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact_image">

                    </div>
                </div>
                <div class="col-lg-7">
                    <?php
                        $names =Yii::$app->request->post('name');
                        $email =Yii::$app->request->post('email');
                        $tel =Yii::$app->request->post('tel');        
                        $texts =Yii::$app->request->post('text');
                    ?>
                    <div class="contact_form_container" style="margin-top: 10px">
                        <div class="contact_title">Не можете выбрать тур?</div>
                        <p style="color: white">Оставьте заявку, и мы подберём для вас идеальное предложение!</p>
                        <?php $form = ActiveForm::begin(); ?>
                            <input type="text" id="contact_form_name" value="<?=$names?>" name="name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
                            <input type="text" id="contact_form_email" value="<?=$email?>" name="email"  class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                            <input type="number" id="contact_form_subject" value="<?=$tel?>" name="tel" class="contact_form_subject input_field" placeholder="Phone" required="required" data-error="Subject is required.">
                            <textarea id="contact_form_message" name="text" value="<?=$texts?>" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                            <input type="text" hidden value="<?=date("Y-m-d h:i")?>" name="date">
                            <button type="submit" id="form_submit_button" class="form_submit_button button">отправить<span></span><span></span><span></span></button>
                            <?php
                            if($names){
                            ?>
                            <p style="background-color: red;padding: 5px;color: white;float: right;">
                              <?=$yubor[$title]?>  
                            </p>
                        <?php }?>
                        <?php $form = ActiveForm::end(); ?>
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