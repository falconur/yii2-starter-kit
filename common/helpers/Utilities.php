<?php
/**
 * Created by PhpStorm.
 * User: Nuriddin Kamardinov
 * Date: 24/02/20
 * Time: 14:13
 */

namespace common\helpers;

use Yii;
use yii\helpers\Html;

class Utilities
{
    /**
     * Backend aside-menu check children's link
     *
     * @param $menu
     * @return bool
     */
    public static function checkMainMenuStatus($menu)
    {
        if (isset($menu['children']))
            foreach ($menu['children'] as $item) {
                if (self::checkChildMenuStatus($item))
                    return true;
            }

        return false;
    }

    /**
     * Backend aside-menu check link
     *
     * @param $menu
     * @return bool
     */
    public static function checkChildMenuStatus($menu)
    {
        $url = Yii::$app->request->url;
        if (isset($menu['link']) && $menu['link'] != '' && $menu['link'] == $url) {
            return true;
        } else {
            return false;
        }
    }

    public static function getActionColumn($items = [1, 1, 1])
    {
        return [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view}{update}{delete}',
            'header' => Yii::t('backend', 'Действии'),
            'buttons' => [
                'view' => function ($url, $model) use ($items) {
                    if (!$items[0]) return '';
                    return Html::a('<span class="fa fa-eye"></span>', $url, [
                        'title' => Yii::t('backend', 'View'),
                        'class' => 'btn btn-info',
                        'data-pjax' => 0,
                    ]);
                },
                'update' => function ($url, $model) use ($items) {
                    if (!$items[1]) return '';
                    return Html::a('<span class="fa fa-edit"></span>', $url, [
                        'title' => Yii::t('backend', 'Update'),
                        'class' => 'btn btn-warning',
                        'data-pjax' => 0,
                    ]);
                },
                'delete' => function ($url, $model) use ($items) {
                    if (!$items[2]) return '';
                    return Html::a('<span class="fa fa-trash"></span>', $url, [
                        'title' => Yii::t('backend', 'Delete'),
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                            'pjax' => 0,
                        ],
                    ]);
                },
            ],
        ];
    }
}