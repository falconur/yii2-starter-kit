<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\AdminSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-search collapse"
     id="admin-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
        ]); ?>

    <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                <?= $form->field($model, 'id') ?>

            </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                <?= $form->field($model, 'email') ?>

            </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                <?= $form->field($model, 'full_name') ?>

            </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                <?= $form->field($model, 'role') ?>

            </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                <?= $form->field($model, 'auth_key') ?>

            </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                <?= $form->field($model, 'password_hash') ?>

            </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                <?= $form->field($model, 'password_reset_token') ?>

            </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                <?= $form->field($model, 'status') ?>

            </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                <?= $form->field($model, 'created_at') ?>

            </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                <?= $form->field($model, 'updated_at') ?>

            </div>
            </div>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn
        btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
