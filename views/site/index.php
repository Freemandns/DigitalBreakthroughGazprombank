<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?=Yii::$app->user->identity->role_id?>
</div>
