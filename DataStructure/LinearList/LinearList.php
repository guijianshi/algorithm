<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/5
 * Time: 14:13
 */

namespace DataStructure\LinearList;


class LinearList implements ListInterface
{
    public $data;

    public $length;

    public $max;
    /**
     * LinearList constructor.
     * @param $data
     */
    public function __construct($data = [], $max = 1000)
    {
        $this->data = $data;

        $this->length = count($this->data);

        $this->max = $max;
    }

    public function init($data = [])
    {
        $this->data = $data;
    }

    public function isEmpty()
    {
        return $this->length() ? false : true;
    }

    public function getElem($k)
    {
        // TODO: Implement getElem() method.
    }

    public function find($e)
    {
        if ($this->isEmpty()) {
            throw new \Exception('空表');
        }
        $len = $this->length();
        $i = 0;
        while ($i < $len && $this->data[$i] != $e) {
            $i++;
        }
        return $i >= $len ? -1 : $i + 1;
    }

    public function insert($i, $e)
    {
        if ($i < 1 || $i > $this->max) {
            throw new \Exception('插入位置非法');
        }
        for ($k = $i-1; $k < $this->length; $k++) {
            $this->data[$k + 1] = $this->data[$k];
        }
        $this->data[$i - 1] = $e;
        return true;
    }

    public function delete($i)
    {
        // TODO: Implement delete() method.
    }

    public function length()
    {
        return count($this->data);
    }

}