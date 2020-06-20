<?php

/* @var $this yii\web\View */
/* @var $ideaUsers array */
/* @var $thematics array */
/* @var $users array */
/* @var $department array */
/* @var $randomIdeaUsers array */

use yii\debug\models\timeline\DataProvider;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

$this->title = 'Главная';
?>
<div class='topideas'>
    <h1 class='pred'>Предложения</h1>

    <div class='top'>
        <?php foreach($ideaUsers as $value): ?>
            <div class='span'>
                <img class='ava' src="<?=$value['avatar']?>">
                <div class='lf'>
                    <h4><?=$value['idea_header']?></h4>
                    <p><?=$value['idea_description']?></p>
                    <h4><?=$value->surname?> <?=$value['firstname']?></h4>
                    <img class='oc' src="/web/assets/main_img/likes.png">
                    <img class='oc' src="/web/assets/main_img/dislikes.png">
                </div>
            </div>
        <?php endforeach; ?>

    </div>


    <div class='rg'>
        <img src="/web/assets/main_img/11.gif" width="100%" style="float: right; margin: 65% 0 0 0;">
    </div>


</div>
<div class='razdel'>
    <ul class='rez'>
        <?php foreach($thematics as $value): ?>
            <a href="<?=Url::toRoute(['ideas/filter-thematics', 'filter'=>$value->id_thematic])?>">
                <li><?=$value->thematic_name?></li>
            </a>
        <?php endforeach; ?>
    </ul>
    <h1 class='tem'>Тематики</h1>
</div>



<div class='topuser'>


    <img class='topimg' src="/web/assets/main_img/11.gif">



<div class='top'>
	<?php foreach($users as $value): ?>
        <div class='span'>
            <img class='ava' src="<?=$value['avatar']?>">
            <div class='lf'>
                <h4><?=$value['idea_header']?></h4>
                <p><?=$value['idea_description']?></p>
                <h4><?=$value->surname?> <?=$value['firstname']?></h4>
                <img class='oc' src="/web/assets/main_img/likes.png">
                <img class='oc' src="/web/assets/main_img/dislikes.png">
            </div>
        </div>
	<?php endforeach; ?>

    </div>


    <h1 class='pred'>Участники</h1>


</div>
<div class='razdel' style=" background-color: #CEDFF4;">
    <ul class='rez' style='width: 40%;'>
		<?php foreach($department as $value): ?>
            <a href="<?=Url::toRoute(['ideas/filter-department','filter'=>$value->id_department])?>">
                <li><?=$value->department_name?></li>
            </a>
		<?php endforeach; ?>
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
	<?php foreach($randomIdeaUsers as $value): ?>
        <div class='span'>
            <img class='ava' src="<?=$value['avatar']?>">
            <div class='lf'>
                <h4><?=$value['idea_header']?></h4>
                <p><?=$value['idea_description']?></p>
                <h4><?=$value->surname?> <?=$value['firstname']?></h4>
                <img class='oc' src="/web/assets/main_img/likes.png">
                <img class='oc' src="/web/assets/main_img/dislikes.png">
            </div>
        </div>
	<?php endforeach; ?>
</div>

</div>
