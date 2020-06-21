<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
?>
<div class="site-login">
    
    <p id='auth_page_header'>Авторизация:</p>
    <p id='auth_page_mess'>Пожалуйста, заполните следующие поля для входа в систему:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "<div id='new_color'>{label}</div>\n<div>{input}</div>\n<div>{error}</div>",
            // 'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'auth_input']) ?>

        <?= $form->field($model, 'password')->passwordInput(['class' => 'auth_input']) ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div>{input} {label}</div>\n<div>{error}</div>",
        ]) ?>

        <?= Html::submitButton('Войти', ['class' => 'auth_btn', 'name' => 'login-button']) ?>

    <?php ActiveForm::end(); ?>

</div>
