<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?=Yii::$app->user->identity->id_role?>
</div>
