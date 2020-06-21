<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/web/assets/main_css/style.css" rel="stylesheet" type="text/css">
    <?php $this->registerCsrfMetaTags() ?>
    <title>ПРОДВИЖЕНИЕ ИДЕЙ: <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <header>
    <a href="index.html"><img src="/web/assets/main_img/logobank.png"></a>
    <!-- <ul class='menu'>
        <a href="#"><li>Личный кабинет</li></a>
        <a href="#"><li>Популярные идеи</li></a>
        <a href="#"><li>Тематики</li></a>
        <a href="#"><li>Рейтинг Участников</li></a>
        <a href="#"><li>Случайные идеи</li></a>

    </ul> -->

    <ul class="menu">
        <?php
            NavBar::begin([
                'brandUrl' => Yii::$app->homeUrl,
            ]);
            echo Nav::widget([
                'options' => ['class' => 'asd'],
                'items' => [
                    // ['label' => 'Главная', 'url' => ['/site/index']],
                    ['label' => 'Личный кабинет', 'url' => ['/site/lk']],
                    ['label' => 'Популярные идеи', 'url' => '#Offers'],
                    ['label' => 'Тематики', 'url' => '#Thematics'],
                    ['label' => 'Рейтинг участников', 'url' => '#Participants'],
                    ['label' => 'Случайные идеи', 'url' => '#RandomIdeas'],
                    Yii::$app->user->isGuest ? (
                        ['label' => 'ВХОД', 'url' => ['/site/index']]
                    ) : (
                        Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'ВЫХОД',
                            ['class' => 'asdafg']
                        )
                        . Html::endForm()
                    )
                ],
            ]);
            NavBar::end();
        ?>
    </ul>
    </header>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			'homeLink'=>['label'=>'Главная','url'=>'/web/'],
        ]) ?>
        <?= Alert::widget() ?>

            <?= $content ?>

</div>


<footer>
<div class='menu_footer'>
    <div id='footer_menu'>
        <?php
            echo "<a class='menu_btn' href='/web/index.php?r=site%2Flk'>Личный кабинет</a><br>
                  <a class='menu_btn' href='#'>Популярные идеи</a><br>
                  <a class='menu_btn' href='#'>Тематики</a><br>
                  <a class='menu_btn' href='#'>Рейтинг участников</a><br>
                  <a class='menu_btn' href='#'>Слуйчайные идеи</a><br>";
        ?>
    </div>
    <div class='soccet'>
        <a href="#"><img class='fix_size_ico' src="/web/assets/main_img/in.png"></a>
        <a href="#"><img class='fix_size_ico' src="/web/assets/main_img/f.png"></a>
        <a href="#"><img class='fix_size_ico' src="/web/assets/main_img/vk.png"></a>
    </div>
</div>
<hr>
<div class='copy'>Все права защищены. 2020 © ЖЕСТЬ </div>
</footer>

<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; ПРОДВИЖЕНИЕ ИДЕЙ <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
