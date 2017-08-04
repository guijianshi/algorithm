<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/3
 * Time: 10:21
 */

namespace algorithm\Search;


/**
 * 顺序表查找
 * 返回0表示未找到
 * Class SequentialSearch
 * @package algorithm\Search
 */
class SequentialSearch
{
    /**
     * 顺序查找
     * @param $data
     * @param $key
     * @return int
     */
    public static function sequentialSearch1(array $data, $key):int
    {
        $n = count($data);
        for ($i = 0; $i < $n; $i++) {
            if ($data[$i] === $key)
                return $i + 1;
        }
        return 0;
    }

    /**
     * 利用哨兵对查找进行优化,减少比较次数
     * @param array $data
     * @param $key
     * @return int
     */
    public static function sequentialSearch2(array $data, $key):int
    {
        $i = count($data) - 1;
        $data[-1] = $key;
        while ($data[$i] !== $key) {
            $i--;
        }
        return $i + 1;
    }
}