<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
$this->title = 'Contact';
$title = "title_";
$title .= Yii::$app->language;

$adres = array('title_uz'=>"Xorazm viloyati Urganch shaxar Pahlovon Mahmud ko'cha 2A uy 50-xonadon",'title_ru'=>'
Город Ургенч, Хорезмская область улица Пахловона Махмуда 50, 2А','title_en'=>'50, Pahlovon Mahmud Street, Urgench city, Khorezm region');
?>
</div>
<div class="site-contact" style="margin-top: -50px">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5aae7629f78e64aa50de413f876111903cc7a5407b13464e33d06d9844c9d92c&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
    <div class="container">
        <div class="row">
            <div class="col-md-4"><br>
                <img src="<?=Yii::$app->request->baseUrl?>/logo.png" style="width: 80px" alt="">
                <hr style="margin-top:6px">
                <p style="font-size: 15px;color: black"><?=$adres[$title]?></p>
                <p style="color: black;font-size: 14px"><i class="fa fa-phone"></i> +99894 113-86-88</p>
                <p style="color: black;font-size: 14px"><i class="fa fa-phone"></i> +99899 046-93-43</p>
                <p style="color: black;font-size: 14px"><i class="fa fa-phone"></i> +99899 704-48-45</p>
                <p style="color: black;font-size: 14px"><i class="fa fa-envelope"></i> turonvoyage@gmail.com</p>
                <br>
                <br>
            </div>
            <div class="col-md-8" >
                <!--Section: Contact v.2-->
                <section class="mb-4">
                    <br>
                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                    <!--Section description-->
                    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                        a matter of hours to help you.</p>

                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">
                            <?php $form = ActiveForm::begin(); ?>

                            <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="name" class="">Your name</label>
                                            <input type="text" id="name" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="email" class="">Your email</label>
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <label for="email" class="">Phone</label>
                                            <input type="text" id="subject" name="subject" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <label for="message">Your message</label>

                                            <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->


                            <br>
                            <div class="text-center text-md-left">
                                <button class="btn btn-info" style="color: white;padding-left: 20px;padding-right: 20px" >Send</button>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->

                        <!--Grid column-->

                    </div>

                </section>
                <!--Section: Contact v.2-->

            </div>

        </div>
    </div>
</div>
<br>
<br>
<br>