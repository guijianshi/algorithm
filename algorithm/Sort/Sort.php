<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/9/7
 * Time: 15:10
 */

namespace algorithm\Sort;


class Sort
{
    public function bubble(array $arr)
    {
        $count = 0;
        for ($i = 0; $i < count($arr); $i++) {

            for ($j = count($arr) - 1; $j > $i; $j--) {
                if ($arr[$j - 1] > $arr[$j]) {
                    $count ++;
                    swap($arr, $j - 1 , $j);
                }
            }
        }
        echo '共交换: ', $count, '次';
        return $arr;
    }

    public function selectSort(array $arr)
    {
        $len = count($arr);
        $count = 0;
        for ($i = 0; $i < $len; $i++) {
            $min = $i;
            for ($j = $len - 1; $j > $i; $j--) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }
            if ($i != $min) {
                $count++;
                swap($arr,  $i, $min);
            }
        }
        echo '<hr/>','共交换: ', $count, '次';
        return $arr;
    }
}