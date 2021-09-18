<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Uzbimg;
$this->title = 'Uzbekistan';
$title = "title_";
$title .= Yii::$app->language;


?>
</div>
<div class="site-about">
    
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9108da033e2195d269db93b355af1813b9cd1b9528fd56055ee255b970031ad9&amp;source=constructor" width="100%" height="574" frameborder="0"></iframe>
   

    <div class="container">
        

<hr>
<?php foreach ($uzb as $item){ ?>
  

        <h2 class="" style="font-size: 23px;color: #0088cc;text-align: center"><b><?=$item[$name]?></b></h2>
        <p><?=$item[$text]?></p>
        <hr>
        <?php
        $imgs =Uzbimg::find()->where(['cate'=>$item['id']])->all();
        ?>
          <?php foreach ($imgs as $img){ ?>
          
            <div class="col-md-4">
              <img style="width: 100%" src="<?=Yii::$app->request->baseUrl?>/photo/<?=$img['img']?>" class="img-thumbnail">
            </div>
          <?php } ?>
<?php } ?>

</div>
</div>