<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/3
 * Time: 10:40
 */

namespace algorithm\Search;

/**
 * 有序表查找
 *
 * Class OrderedListSearch
 * @package algorithm\Search
 */
class OrderedListSearch
{
    public static function binarySearch(array $data, $key): int
    {
        $n = count($data);
        /*定义最高位下标和最低位下标*/
        $high = $n - 1;
        $low = 0;
        while ($low <= $high) {
            $mid = intdiv(($high + $low), 2);
            if ($key < $data[$mid]) {
                $high = $mid - 1;
            } elseif ($key > $data[$mid]) {
                $low = $mid + 1;
            } else {
                return $mid + 1;
            }
        }
        return 0;
    }

    public static function insertSearch(array $data, $key): int
    {
        $n = count($data);
        /*定义最高位下标和最低位下标*/
        $high = $n - 1;
        $low = 0;
        while ($low <= $high) {
            $mid = $low + intdiv($key - $data[$low], $data[$high] - $key) * ($high - $low);
            if ($key < $data[$mid]) {
                $high = $mid - 1;
            } elseif ($key > $data[$mid]) {
                $low = $mid + 1;
            } else {
                return $mid + 1;
            }
        }
        return 0;
    }

    public static function fibonacciSearch(array $data, $key): int
    {

    }
}