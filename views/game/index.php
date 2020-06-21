<?php
use app\models\entities\TowerLevels;
?>
<div id='st_page'>
    <div id='game_process'>
        <div id='info_bar'>
            <img id='progress_img' src='/web/assets/game_img/progress.png'>Прогресс: <?=Yii::$app->user->identity->tower_progress?> | <img id='level_img' src='/web/assets/game_img/level.png'>Уровень: <?=Yii::$app->user->identity->tower_level_id?> (<?=TowerLevels::findOne(['id_tower_level'=>Yii::$app->user->identity->tower_level_id])->tower_level_name?>) | <img id='coin_img' src='/web/assets/game_img/coin.png'>ГазПромCoin: <?=Yii::$app->user->identity->gazprom_coin?>
        </div>
        <div id='game_view'>
            <img id='bank_img' src='/web/assets/game_img/img_bank.png'>
        </div>
    </div>
</div>
