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
$otps =array('title_uz'=>'Hali ham savollaringiz bormi?','title_ru'=>'Остались вопросы? ','title_en'=>'Still have questions?');
$yubor =array('title_uz'=>'Habar yuborish','title_ru'=>'Отправить сообщение','title_en'=>'Send a message');
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
                    <h2 class="h1-responsive font-weight-bold text-center my-4"><?=$otps[$title]?></h2>
                    <!--Section description-->
                    

                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">
                           <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->input('email') ?>

        <?= $form->field($model, 'phone')->textInput(['type' => 'number']) ?>

        <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton($yubor[$title], ['class' => 'btn btn-success']) ?>
        </div>
        <?= $form->field($model, 'date')->hiddenInput(['value' =>date("Y-m-d h:i")]) ?>
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

