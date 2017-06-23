<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/22
 * Time: 8:46
 */

namespace algorithm\Isort;


class Isort
{
    public function isort($arr)
    {
        $n = count($arr);
        for ($i = 1; $i < $n; $i++) {
            $x = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $x < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $j = $j - 1;
            }
            $arr[$j+1] = $x;
        }
        return $arr;
    }
}