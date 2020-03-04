<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model LoginForm */

use common\models\LoginForm;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg"><?= Yii::t('backend', 'Sign in to start your session') ?></p>
        <p>Email: admin@gmail.com / Password: admin</p>
        <?php $form = ActiveForm::begin() ?>

        <?= $form->field($model, 'email', [
            'template' => "<div class='input-group'>{input}<div class=\"input-group-append\"><div class=\"input-group-text\"><span class=\"fas fa-envelope\"></span></div></div></div><div>{error}{hint}</div>",
        ])->textInput(['class' => 'form-control', 'placeholder' => 'Email'])  ?>

        <?= $form->field($model, 'password', [
            'template' => "<div class='input-group'>{input}<div class=\"input-group-append\"><div class=\"input-group-text\"><span class=\"fas fa-lock\"></span></div></div></div><div>{error}{hint}</div>",
        ])->passwordInput(['class' => 'form-control', 'placeholder' => 'Password'])  ?>

        <div class="row">
            <div class="col-8">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </div>

        <?php ActiveForm::end() ?>

    </div>
</div>
