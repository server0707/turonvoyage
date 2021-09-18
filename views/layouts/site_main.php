<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$title = "title_";
$title .= Yii::$app->language;
$home = array('title_uz'=>'Bosh sahifa','title_ru'=>'Главная','title_en'=>'Home');
$yugo = array('title_uz'=>'Janubi-Sharqiy Osiyo','title_ru'=>'Юго-Восточная Азия','title_en'=>'South-East Asia');
$evro = array('title_uz'=>'Yevropa','title_ru'=>'Европа','title_en'=>'Europe');
$dubay = array('title_uz'=>'Dubay','title_ru'=>'Дубай','title_en'=>'Dubai');
$vip = array('title_uz'=>'VIP ekskursiyalar','title_ru'=>'VIP Туры','title_en'=>'VIP Tours');
$about = array('title_uz'=>'Kompaniya haqida','title_ru'=>'О компании','title_en'=>'About company');
$contents = array('title_uz'=>'Aloqa','title_ru'=>'Контакты','title_en'=>'Contact');
$uzb = array('title_uz'=>'O`ZBEKISTAN','title_ru'=>'УЗБЕКИСТАН','title_en'=>'UZBEKISTAN');
$adres = array('title_uz'=>"Xorazm viloyati Urganch shaxar Pahlovon Mahmud ko'cha 2A uy 50-xonadon",'title_ru'=>'
Город Ургенч, Хорезмская область улица Пахловона Махмуда 50, 2А','title_en'=>'50, Pahlovon Mahmud Street, Urgench city, Khorezm region');
$name="name_".Yii::$app->language;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Туроператор Туронвояж предлагает горящие туры в Юго-Восточную Азию и отдых за границей">
    <meta name="keywords" content="тур по юго-восточной азии,экскурсионные туры,отдых за границей,комбинированные туры,отдых в юго-восточной азии,экскурсионные туры в таиланд,экскурсионные комбинированные туры,туроператор,тур в пхукет,туры по юго-восточной азии,тур в юго-восточную азию,цены туры в юго-восточную азию,цены  юго-восточная азия тур,туры юго-восточная азия,тур европа,туры в юго-восточную азию,экскурсии в юго-восточной азии,">
    <meta property="og:title" content="Туры в Юго-Восточную Азию из Ташкента | Туроператор в Ташкенте | Горящие туры из Ташкента | Турфирма Туронвояж Ташкент">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="<?=Yii::$app->request->baseUrl?>/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/web/travelix/styles/bootstrap4/bootstrap.min.css">
    <link href="/web/travelix/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/web/travelix/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/web/travelix/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/web/travelix/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">

    <link rel="stylesheet" type="text/css" href="/web/travelix/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/web/travelix/styles/responsive.css">
    <script src="//code.jivosite.com/widget/ChsXWBMzPU" async></script>
    <script type='text/javascript'>
        (function(){ var widget_id = 'lbZTFBFwPV';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = '//code.jivosite.com/script/widget/'+widget_id
            ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
            if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
            else{w.addEventListener('load',l,false);}}})();
    </script>
    <?php $this->head() ?>
</head>
<style>
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>
<body>
<?php $this->beginBody() ?>
<div class="wrap" data-spy="scroll" data-offset="0" data-target="#navbar-main">
<div class="wrap">
    <!-- Header -->

    <header class="header" >

        <!-- Top Bar -->

        <div class="top_bar"  style="background-color: #0088cc;">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="phone" style="font-size: 16px">

                            
                            <i class="fa fa-map-marker"></i> <b style="font-size: 15px"><?=$adres[$title]?></b>
                            &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                            <i class="fa fa-phone"></i> <b style="font-size: 15px">+99899 046-93-43</b>
                        </div>
                        <div class="social">
                            <ul class="social_list">
                                <li class="social_list_item"><a href="https://t.me/turonvoyage"><img src="<?=Yii::$app->request->baseUrl?>/images/telegram.png" style="width: 26px;margin-top: -5px" alt=""></a></li>
                                <li class="social_list_item"><a  href="https://www.facebook.com/turonvoyage"><i style="font-size: 18px" class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social_list_item"><a href="https://www.instagram.com/turonvoyage/"><i style="font-size: 18px" class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social_list_item"><a href="https://www.youtube.com/channel/UCes6J_X7M3D_ohLB1iOZz9Q"><i style="font-size: 18px" class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li class="social_list_item"><a href="https://t.me/turonvoyage"><i style="font-size: 18px" class="fa fa-telegram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="user_box ml-auto">

                            <div class="user_box_link">

                                <?= \cinghie\multilanguage\widgets\MultiLanguageWidget::widget([
                                    'widget_type' => 'classic', // classic or selector
                                    'image_type' => 'classic', // classic or rounded
                                    'width' => '23',
                                    'calling_controller' => $this->context
                                ]); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Main Navigation -->

        <nav class="main_nav" style="background-color: white">
            <div class="container">
                <div class="row">
                    <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <div class="logo" style="margin-top:5px"> <a class="" style="text-decoration: none"  href="<?=\yii\helpers\Url::to(['site/index'])?>"><a class="" style="text-decoration: none"  href="<?=\yii\helpers\Url::to(['site/index'])?>">
                                        <img src="<?=Yii::$app->request->baseUrl?>/logo.png" style="width: 60px" alt=""></a></a></div>
                        </div>
                        <?php
                        $cate = \app\models\Category::find()->all();
                        ?>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list" style="margin-top: 12px">
                                <li class="main_nav_item"><a style="text-decoration: none" href="<?=\yii\helpers\Url::to(['site/index'])?>"><?=$home[$title]?></a></li>
                             


                                <?php foreach ($cate as $item){?>

                                <li class="main_nav_item">
                                    <a style="text-decoration: none" href="<?=\yii\helpers\Url::to(['site/category?id='.$item['id']])?>"><?=$item[$name]?></a>
                                </li>

                                <?php }?>

                                <li class="main_nav_item"><a style="text-decoration: none" href="<?=\yii\helpers\Url::to(['site/about'])?>"><?=$about[$title]?></a></li>

                                <li class="main_nav_item"><a style="text-decoration: none" href="<?=\yii\helpers\Url::to(['site/uzb'])?>"><?=$uzb[$title]?></a></li>                                
                                <li class="main_nav_item"><a style="text-decoration: none" href="<?=\yii\helpers\Url::to(['aloqa/create'])?>"><?=$contents[$title]?></a></li>
                            </ul>
                        </div>


                        <form id="search_form" class="search_form bez_1">
                            <input type="search" class="search_content_input bez_1">
                        </form>

                        <div class="hamburger">
                            <i class="fa fa-bars trans_200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <ul  style="margin-top: -200px">
                <li class="main_item"><a style="text-decoration: none;color:white" href="<?=\yii\helpers\Url::to(['site/index'])?>"><?=$home[$title]?></a></li>
                <?php foreach ($cate as $item){?>
                    <li class="main_item"><a style="text-decoration: none;;color:white" href="<?=\yii\helpers\Url::to(['site/category?id='.$item['id']])?>"><?=$item[$name]?></a></li>
                <?php }?>
                <li class="main_item"><a style="text-decoration: none;;color:white" href="<?=\yii\helpers\Url::to(['site/about'])?>"><?=$about[$title]?></a></li>
                <li class="main_item"><a style="text-decoration: none;;color:white" href="<?=\yii\helpers\Url::to(['site/uzb'])?>"><?=$uzb[$title]?></a></li>
                <li class="main_item"><a style="text-decoration: none;;color:white" href="<?=\yii\helpers\Url::to(['site/contact'])?>"><?=$contents[$title]?></a></li>

            </ul>
        </div>
    </div>

    <!-- end header -->
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>
    <?php
    $adres = array('title_uz'=>"Xorazm viloyati Urganch shaxar Pahlovon Mahmud ko'cha 2A uy 50-xonadon",'title_ru'=>'
Город Ургенч, Хорезмская область улица Пахловона Махмуда 50, 2А','title_en'=>'50, Pahlovon Mahmud Street, Urgench city, Khorezm region');
    $comp = array('title_uz'=>"BIZNING KOMPANYA",'title_ru'=>'НАША КОМПАНИЯ','title_en'=>'OUR COMPANY');
    $adds = array('title_uz'=>"BIZNING KOMPANYA",'title_ru'=>'НАША КОМПАНИЯ','title_en'=>'OUR COMPANY');
    $yon = array('title_uz'=>"YO'NALISHLAR",'title_ru'=>'НАПРАВЛЕНИЯ','title_en'=>'DIRECTIONS');
    ?>
    <!-- Footer -->
    <footer class="" style="background-color: rgba(6,25,49,0.89)"><br>
        <div class="" style="padding: 10px;margin-left: 10px;margin-right: 10px">
            <div class="row">
                <div class="col-md-4" style="margin-top: -18px">
                    <img src="<?=Yii::$app->request->baseUrl?>/logo.png" style="width: 80px" alt="">
                    <hr style="margin-top:6px">
                    <p style="color: white;font-size: 15px"><?=$adres[$title]?></p>
                    <p style="color: white;font-size: 14px"><i class="fa fa-phone"></i> +99894 113-86-88</p>
                    <p style="color: white;font-size: 14px"><i class="fa fa-phone"></i> +99899 046-93-43</p>
                    <p style="color: white;font-size: 14px"><i class="fa fa-phone"></i> +99899 704-48-45</p>
                    <p style="color: white;font-size: 14px"><i class="fa fa-envelope"></i> turonvoyage@gmail.com</p>
                </div>
                <div class="col-md-4" style="margin-top: 48px"><hr>
                    <img style="width: 100%" class="img-thumbnail" src="<?=Yii::$app->request->baseUrl?>/img/sertf.png">
                </div>            
                <div class="col-md-4" style="margin-top: 46px">

                    <hr>
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5aae7629f78e64aa50de413f876111903cc7a5407b13464e33d06d9844c9d92c&amp;source=constructor" width="100%" height="426" frameborder="0"></iframe>

                </div>

            </div>
        </div>
        <br>
    </footer>

    <!-- Copyright -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script src="/web/travelix/js/jquery-3.2.1.min.js"></script>
<script src="/web/travelix/styles/bootstrap4/popper.js"></script>
<script src="/web/travelix/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/web/travelix/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/web/travelix/plugins/easing/easing.js"></script>
<script src="/web/travelix/js/custom.js"></script>