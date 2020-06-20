<?php
use app\models\entities\TowerLevels;
?>
Прогресс: <?=Yii::$app->user->identity->tower_progress?><br>
Уровень: <?=Yii::$app->user->identity->tower_level_id?>
(<?=TowerLevels::findOne(['id_tower_level'=>Yii::$app->user->identity->tower_level_id])->tower_level_name?>)<br>
ГазПромCoin: <?=Yii::$app->user->identity->gazprom_coin?>
