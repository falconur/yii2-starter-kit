<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->searchModelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-search collapse"
     id="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-search">

    <?= "<?php " ?>$form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    <?php if ($generator->enablePjax): ?>
        'options' => [
        'data-pjax' => 1
        ],
    <?php endif; ?>
    ]); ?>

    <div class="row">
        <?php foreach ($generator->getColumnNames() as $attribute): ?>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <?= "<?= " . $generator->generateActiveSearchField($attribute) . " ?>\n\n"; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="form-group">
        <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Search') ?>, ['class' => 'btn btn-primary']) ?>
        <?= "<?= " ?>Html::resetButton(<?= $generator->generateString('Reset') ?>, ['class' => 'btn
        btn-outline-secondary']) ?>
    </div>

    <?= "<?php " ?>ActiveForm::end(); ?>


</div>
