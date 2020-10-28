<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<h1>Test Action view</h1>
<?php

// debug($model);
?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
<?= $form->field($model, 'name')->label('Имя') ?>
<!-- <?//= $form->field($model, 'password')->label('Пароль')->passwordInput() ?> -->
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'text')->label('Текст сообщения')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>

