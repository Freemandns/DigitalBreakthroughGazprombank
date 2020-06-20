<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\entities\Thematics;
use app\models\entities\Moods;

/* @var $this yii\web\View */
/* @var $model app\models\entities\IdeaUsers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="idea-users-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'thematic_id')->textInput() ?> -->

    <?= $form->field($model, 'thematic_id')->dropdownList(
        Thematics::find()->select(['thematic_name', 'id_thematic'])->indexBy('id_thematic')->column()
    ); ?>

    <?= $form->field($model, 'idea_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idea_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mood_id')->dropdownList(
        Moods::find()->select(['mood_name', 'id_mood'])->indexBy('id_mood')->column()
    ) ?>

        <!-- добавить id в контроллере -->

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
