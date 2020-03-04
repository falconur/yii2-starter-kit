<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">
    <div class="card">
        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->textInput() ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

            <div class="form-group">
                <?= Html::a(Html::tag('i', '', ['class' => 'fa fa-arrow-left']) . ' '
                . Yii::t('backend', 'Cancel'), Url::to(Yii::$app->request->referrer), ['class' => 'btn
                btn-dark', 'type' => 'button']) ?>
                <?= Html::submitButton(Yii::t('backend', 'Save'), ['class' => 'btn
                btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
