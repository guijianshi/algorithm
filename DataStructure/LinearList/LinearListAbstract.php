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
    public $data;

    public $length;

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
        return $v;
    }

    public function insert($v)
    {
        $this->length++;
        return $v;
    }

    /**
     * @param $k
     * @return mixed
     */
    public function delete($k)
    {
        return $v;
    }

    /**
     * @param mixed $length
     */
    public function setLengthIncrement()
    {
        $this->length++;
    }



    public function getLength()
    {
        return $this->length;
    }



    /**
     * @return mixed
     */
    public function getMaxLen()
    {
        return $this->max_len;
    }

}