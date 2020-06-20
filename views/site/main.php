<?php

/* @var $this yii\web\View */
/* @var $ideaUsers_dataProvider DataProvider */
/* @var $chart array */
/* @var $thematics array */
/* @var $users_dataProvider DataProvider */
/* @var $randomIdeaUsers_dataProvider DataProvider */

use yii\debug\models\timeline\DataProvider;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Главная';
?>
<div class='topideas'>
    <h1 class='pred'>Предложения</h1>

    <div class='top'>
    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>



    </div>


    <div class='rg'>
        <img src="/web/assets/main_img/11.gif" width="100%" style="float: right; margin: 65% 0 0 0;">
    </div>


</div>
<div class='razdel'>
    <ul class='rez'>
        <a href="#"><li>Управление</li></a>
        <a href="#"><li>Коммуникация</li></a>
        <a href="#"><li>Досуг</li></a>
        <a href="#"><li>Питание</li></a>
        <a href="#"><li>Обеспечение</li></a>
        <a href="#"><li>Оформление</li></a>
        <a href="#"><li>Строение</li></a>
    </ul>
    <h1  class='tem'>Тематики</h1>
</div>



<div class='topuser'>


    <img class='topimg' src="/web/assets/main_img/11.gif">
   


<div class='top'>
    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    </div>


    <h1 class='pred'>Участники</h1>  


</div>
<div class='razdel' style=" background-color: #CEDFF4;">
    <ul class='rez' style='width: 40%;'>
        <a href="#"><li>Отдел</li></a>
        <a href="#"><li>Управление</li></a>
        <a href="#"><li>Департамент</li></a>
        <a href="#"><li>Компания</li></a>
    </ul>
    <h1  class='tem' style="opacity: 0.7; margin-left: -10%; color: #E6EAF0;">Подразделения</h1>
</div>

<div class='razdel'>
<input class='but' type="button" name="" value="Личный кабинет">
</div>


<div class='randideas'>
    <h1 class='tem'>Cлучайные идеи</h1>
    <img src="">
   

<div class='top'>
    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

    <div class='span'>
        <img class='ava' src="/web/assets/main_img/1.png">
    <div class='lf'>
        <h4>Управление</h4>
        <p>Распустить весь отдел стандартизации программного кода!</p>
        <h4>Бунина Вероника</h4>
        <img class='oc' src="/web/assets/main_img/likes.png">
        <img class='oc' src="/web/assets/main_img/dislikes.png">
    </div>
    </div>

</div>

</div>
