<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/9/7
 * Time: 15:42
 */

use algorithm\Sort\Sort;
class Test
{

    private $startTime;

    private $sort;

    /**
     * Test constructor.
     */
    public function __construct()
    {
        $this->sort = new Sort();
        $this->startTime = get_micro_time();
    }

    public function bubble($arr)
    {
        return $this->sort->bubble($arr);
    }


    public function select($arr)
    {
        return $this->sort->selectSort($arr);
    }

    public function __destruct()
    {
        echo '<hr/>';
        echo '花费了: ' . (get_micro_time() - $this->startTime) . 's';
    }
}