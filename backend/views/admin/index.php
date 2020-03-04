<?php

use common\helpers\Utilities;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\AdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Admins');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">
        <p>
            <?= Html::a(Yii::t('backend', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a(Yii::t('backend', 'Advanced Search'), '#', [
                'class' => 'btn btn-primary', 'data-toggle' => 'collapse', 'data-target' => '#admin-search'
            ]) ?>
        </p>

        <?php echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'email:email',
                'full_name',
                'role',
                'auth_key',
                //'password_hash',
                //'password_reset_token',
                //'status',
                //'created_at',
                //'updated_at',

                Utilities::getActionColumn()
            ],
        ]); ?>

    </div>
</div>
