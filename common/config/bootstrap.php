<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('api', dirname(dirname(__DIR__)) . '/api');
Yii::setAlias('assets', dirname(dirname(__DIR__)).'/assets');

if(strpos($_SERVER['HTTP_HOST'], 'local') !== false)
    Yii::setAlias('assets_url', '//assets.effort.local/');
else
    Yii::setAlias('assets_url', '//assets.effort.uz/');
