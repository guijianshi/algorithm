<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/10
 * Time: 8:30
 */

namespace algorithm\Other;


class Other
{
    public static function fbi(int $i)
    {
        if ($i <= 1)
            return $i;
        else
            return self::fbi($i - 1) + self::fbi($i - 2);
    }
}