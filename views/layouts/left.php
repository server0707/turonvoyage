<aside class="main-sidebar" style="background-color: #162b45">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel" style="background-color: #162b45">
            <div class="">
                <img src="<?= Yii::$app->request->baseUrl?>/img/logo.png"  style="width: 100%;border: solid;" alt="User Image"/>
            </div>
        </div>
        <!-- search form -->
        <hr>

        <!-- /.search form -->
        <div style="margin-top: -15px">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Mijozlar murojatlari', 'icon' => 'users', 'url' => ['aloqa/index']],
                    ['label' => 'Jamoa azolari', 'icon' => 'users', 'url' => ['team/index']],
                    ['label' => 'Faol turlar', 'icon' => 'flag', 'url' => ['populyar/index']],
                    ['label' => 'Slider suratlari', 'icon' => 'image', 'url' => ['slider/index']],
                    ['label' => "Kompanya haqida", 'icon' => 'bank', 'url' => ['about/index']],
                    ['label' => 'Sayohat turlari', 'icon' => 'edit', 'url' => ['category/index']],
                    ['label' => "Sayohatlar", 'icon' => 'image', 'url' => ['travels/index']],
                    ['label' => "Fotolavhalar", 'icon' => 'image', 'url' => ['photo/index']],
                    ['label' => 'Mehmonxonalar', 'icon' => 'bank', 'url' => ['otel/index']],
                    ['label' => 'Mijozlar izoxi', 'icon' => 'user', 'url' => ['client/index']],
                    ['label' => 'Uzbekistan', 'icon' => 'user', 'url' => ['uzb/index']],
                    ['label' => 'Uzbekistan suratlari', 'icon' => 'user', 'url' => ['uzbimg/index']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                ],
            ]
        ) ?>
            <hr>
        </div>
    </section>

</aside>
