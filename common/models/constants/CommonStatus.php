<?php
/**
 * Created by PhpStorm.
 * User: Nuriddin Kamardinov
 * Date: 29/02/20
 * Time: 12:39
 */


namespace common\models\constants;


class CommonStatus
{
    const NON_ACTIVE = 0;
    const ACTIVE = 1;
    const DELETED = -1;

    public static function getString($status)
    {
        switch ($status){
            case self::STATUS_DELETED:
                return Yii::t('backend', 'Удален');
            case self::STATUS_NON_ACTIVE:
                return Yii::t('backend', 'Не активный');
            case self::STATUS_ACTIVE:
                return Yii::t('backend', 'Активный');
        }
        return Yii::t('backend', 'Неизвестный');
    }

    public static function getArray()
    {
        return [
            self::STATUS_ACTIVE => self::getString(self::STATUS_ACTIVE),
            self::STATUS_NON_ACTIVE => self::getString(self::STATUS_NON_ACTIVE),
            self::STATUS_DELETED => self::getString(self::STATUS_DELETED),
        ];
    }
}