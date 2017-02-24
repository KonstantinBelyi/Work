<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model_signup app\models\Signup */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
?>
<div class="container">
    <div class="text-center">
        <h3><?= Html::encode($this->title) ?></h3>
    </div>


    <div class="col-xs-4 col-xs-offset-4">
        <?php $form = ActiveForm::begin(['id' => 'form-horizontal']); ?>

        <?= $form->field($model_signup, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model_signup, 'email') ?>

        <?= $form->field($model_signup, 'password')->passwordInput() ?>

        <div class="form-group text-center">
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

</div>