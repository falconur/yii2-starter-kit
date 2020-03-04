<?php
/**
 * Created by PhpStorm.
 * User: Nuriddin Kamardinov
 * Date: 24/02/20
 * Time: 13:23
 */


use common\helpers\Utilities;
use yii\helpers\Url;

$menu = [
    [
        'title' => Yii::t('backend', 'Dashboard'),
        'icon' => 'tachometer-alt',
        'link' => '/',
    ],
    [
        'title' => Yii::t('backend', 'Admins'),
        'icon' => 'user',
        'link' => Url::to(['admin/index'])
    ],
    [
        'title' => Yii::t('backend', 'Dashboard2'),
        'icon' => 'tachometer-alt',
        'link' => '#',
        'children' => [
            [
                'title' => '1',
                'link' => '#1'
            ],
            [
                'title' => '2',
                'link' => '#2'
            ]
        ]
    ]
];

?>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <?php foreach ($menu as $item):  ?>
        <?php $hasChildren = Utilities::checkMainMenuStatus($item) ?>
        <?php $hasLink = Utilities::checkChildMenuStatus($item) ?>
        <li class="nav-item has-treeview <?php if ($hasChildren): ?> menu-open <?php endif; ?>">
            <a href="<?= $item['link'] ?>" class="nav-link <?php if ($hasChildren || $hasLink): ?> active <?php endif; ?>">
                <i class="nav-icon fas fa-<?= $item['icon'] ?>"></i>
                <p>
                    <?= $item['title'] ?>
                    <?php if (isset($item['children'])): ?>
                        <i class="right fas fa-angle-left"></i>
                    <?php endif; ?>
                </p>
            </a>
            <?php if (isset($item['children'])): ?>
            <ul class="nav nav-treeview">
                <?php foreach ($item['children'] as $child): ?>
                <li class="nav-item">
                    <a href="<?= $child['link'] ?>" class="nav-link <?php if (Utilities::checkChildMenuStatus($child)): ?> active <?php endif; ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p><?= $child['title']?></p>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>



        <?= strpos(Yii::$app->request->url, Url::to(['site/about'])) !== false ?>
    </ul>
</nav>
