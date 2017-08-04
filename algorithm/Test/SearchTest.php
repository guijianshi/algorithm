<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/3
 * Time: 10:51
 */

namespace algorithm\Test;


use algorithm\Data\Data;
use algorithm\Search\OrderedListSearch;

class SearchTest
{
    const data = [0,1,5,10,20,30,40,50,60,70,90];

    /**
     * 测试折半查找
     * @return int
     */
    public static function binarySearch()
    {
        return OrderedListSearch::binarySearch(self::data,20);
    }

    public static function insertSearch()
    {
        return OrderedListSearch::insertSearch(self::data, 20);
    }

    public function fibonacci($k)
    {
        return Data::fibonacci($k);
    }
}