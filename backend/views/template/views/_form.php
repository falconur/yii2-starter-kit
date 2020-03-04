<?php

use yii\db\ActiveRecord;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">
    <div class="card">
        <div class="card-body">
            <?= "<?php " ?>$form = ActiveForm::begin(); ?>

            <?php foreach ($generator->getColumnNames() as $attribute) {
                if (in_array($attribute, $safeAttributes)) {
                    echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
                }
            } ?>
            <div class="form-group">
                <?= "<?= " ?>Html::a(Html::tag('i', '', ['class' => 'fa fa-arrow-left']) . ' '
                . <?= $generator->generateString('Cancel') ?>, Url::to(Yii::$app->request->referrer), ['class' => 'btn
                btn-dark', 'type' => 'button']) ?>
                <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Save') ?>, ['class' => 'btn
                btn-success']) ?>
            </div>

            <?= "<?php " ?>ActiveForm::end(); ?>
        </div>
    </div>

</div>
