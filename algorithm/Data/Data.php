<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/22
 * Time: 15:45
 */

namespace algorithm\Data;


class Data
{
    private static $arr = [];

    public function __construct($n = 100000)
    {
        for ($i = 0; $i < $n; $i++) {
            self::$arr[] = rand(0,10000000);
        }
        self::$arr =  array_unique(self::$arr);
    }


    /**
     * @return array
     */
    public static function getArr()
    {
        return self::$arr;
    }

    /**
     * @param array $arr
     */
    public static function setArr($arr)
    {
        self::$arr = $arr;
    }

    public static function generateArr($n = 100000)
    {
        for ($i = 0; $i < $n; $i++) {
            self::$arr[] = rand(0,10000000);
        }
        return array_values(array_unique(self::$arr));
    }
}