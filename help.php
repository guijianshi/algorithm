<?php

/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/7
 * Time: 17:02
 */

if (!function_exists('dump')) {
    function dump($data)
    {
        echo '<br/>', '<hr>';
        var_dump($data);
    }
}
/* 交换数组两下标的值 */
if (!function_exists('swap')) {
    function swap(array &$arr, int $i, int $j)
    {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }
}

if (!function_exists('get_micro_time'))
{
    /**
     * @return float
     */
    function get_micro_time()
    {
        list($micro, $second) = explode(' ', microtime());
        return (float)$second + (float)$micro;
    }
}
