<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/10
 * Time: 13:52
 */

namespace DataStructure\Stack;

class Stack implements StackInterface
{
    public $data;

    public $top;

    public $max;

    /**
     * Stack constructor.
     * @param $data
     * @param $top
     */
    public function __construct(array $data = [], int $max = 100, int $top = -1)
    {
        $this->data = $data;
        $this->top = $top;
        $this->max = $max;
    }


    public function init()
    {
        // TODO: Implement init() method.
    }

    public function clear()
    {
        $this->__construct();
    }

    public function isFull()
    {
        return count($this->data) == $this->max ? true : false;
    }

    public function getTop()
    {

        return $this->data[$this->top];
    }

    public function push($data)
    {
        if ($this->top == $this->max - 1)
            throw new \Exception('栈满');
        $this->top++;
        $this->data[$this->top] = $data;
        return OK;
    }

    public function pop(&$data)
    {
        if ($this->top == -1)
            throw new \Exception('栈空');
        $data = $this->data[$this->top];
        $this->top--;
        return OK;
    }

    public function isEmpty()
    {
        return $this->top = -1 ? true : false;
    }

    public function getLength()
    {
        return count($this->data);
    }

}