<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/3
 * Time: 17:04
 */

namespace DataStructure\LinearList;


abstract class LinearListAbstract
{
    private $data;

    private $length;

    private $max_len;

    public function __construct($data = [],$max_len)
    {
        $this->max_len = $max_len;
    }

    public function isEmpty()
    {

    }

    public function clear()
    {

    }

    /**
     * @param $k
     * @return mixed
     */
    public function getElem($k)
    {
        return $v;
    }

    public function locateElem($v)
    {

    }

    public function insert($k, $v)
    {

    }

    /**
     * @param $k
     * @return mixed
     */
    public function delete($k)
    {
        return $v;
    }

    public function getLength()
    {

    }
}