<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/5
 * Time: 14:13
 */

namespace DataStructure\LinearList;

/**
 * 线性表顺序存储PHP实现
 * Class LinearList
 * @package DataStructure\LinearList
 */
class LinearList implements ListInterface
{
    protected $data;

    protected $length;

    protected $max;

    /**
     * LinearList constructor.
     * @param array $data
     * @param int $max
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
        $this->length = count($this->data);
    }

    public function isEmpty()
    {
        return $this->length ? false : true;
    }

    /**
     * O(1)
     * @param int $i
     * @return mixed
     * @throws \Exception
     */
    public function getElem(int $i)
    {
        if ($i < 1 || $i > $this->length) {
            throw new \Exception('参数越界');
        }
        return $this->data[$i - 1];
    }

    /**
     * O(n)
     * @param $e
     * @return int
     * @throws \Exception
     */
    public function find($e)
    {
        if ($this->isEmpty()) {
            throw new \Exception('空表');
        }
        $i = 0;
        while ($i < $this->length && $this->data[$i] != $e) {
            $i++;
        }
        return $i >= $this->length ? -1 : $i + 1;
    }

    /**
     * O(n)
     * @param int $i
     * @param $e
     * @return bool
     * @throws \Exception
     */
    public function insert(int $i, $e)
    {
        /*插入位置从头部到尾部之间,不得越界*/
        if ($i < 1 || $i > $this->length + 1) {
            throw new \Exception('插入位置非法');
        }
        /*尾部到插入位置右移腾位*/
        for ($k = $this->length; $k >= $i; $k--) {
            $this->data[$k] = $this->data[$k - 1];
        }
        $this->data[$k] = $e;
        $this->length++;
        return true;
    }

    /**
     * O(n)
     * @param int $i
     * @return mixed
     * @throws \Exception
     */
    public function delete(int $i)
    {
        /*删除位置不得越界,界限为头部到尾部*/
        if ($i < 1 || $i > $this->length) {
            throw new \Exception('删除位置非法');
        }
        $e = $this->data[$i - 1];
        for ($k = $i; $k < $this->length; $k++) {
            $this->data[$k - 1] = $this->data[$k];
        }
        $this->length--;
        unset($this->data[$k - 1]);
        return $e;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

}