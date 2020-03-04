<?php
/**
 * Created by PhpStorm.
 * User: Nuriddin Kamardinov
 * Date: 29/02/20
 * Time: 12:27
 */

namespace common\models\constants;

use Yii;

class UserRole
{
    const ADMIN = 1;
    const USER = 2;

    public static function getString($user_role)
    {
        switch ($user_role){
            case self::ADMIN:
                return Yii::t('backend', 'Admin');
            case self::USER:
                return Yii::t('backend', 'User');
        }
    }

    public static function getArray()
    {
        return [
            self::ADMIN => self::getString(self::ADMIN),
            self::USER => self::getString(self::USER)
        ];
    }
}