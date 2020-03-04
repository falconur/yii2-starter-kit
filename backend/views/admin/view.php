<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Admin */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Admins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="admin-view">
    <div class="card">
        <div class="card-body">

            <p>
                <?= Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->id],
                ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
                ],
                ]) ?>
            </p>

            <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                        'id',
            'email:email',
            'full_name',
            'role',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'status',
            'created_at',
            'updated_at',
            ],
            ]) ?>

        </div>
    </div>

</div>
