<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/10
 * Time: 16:47
 */

namespace DataStructure\Stack;


class StackNode
{
    public $data;

    public $next;

    /**
     * StackNode constructor.
     * @param $data
     * @param $next
     * @param $count
     */
    public function __construct($data = null, $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}


class LinkedStack implements StackInterface
{
    public $top;

    public $count;

    /**
     * LinkedStack constructor.
     * @param $data
     * @param $top
     */
    public function __construct($top = null, $count = 0)
    {
        $this->top = $top;
        $this->count = $count;
    }


    public function init()
    {
        // TODO: Implement init() method.
    }

    public function clear()
    {
        $this->data = null;
        $this->top = -1;
        $this->count = 0;
    }

    /**
     * 链表结构栈不存在栈满
     * @return bool
     */
    public function isFull()
    {
        return false;
    }

    public function getTop()
    {
        if (null === $this->top)
            throw new \Exception('栈空');
        return $this->top;
    }

    public function push($data)
    {
        $node = $this->top;
        $new_node = new StackNode($data);
        $this->top = $new_node;
        $this->top->next = $node;
        $this->count++;
        return OK;
    }

    public function pop(&$data)
    {
        if (-1 === $this->top)
            throw new \Exception('栈空');
        $node = $this->top;
        $this->top = $node->next;
        $this->count--;
        $data = $node->data;
        return OK;
    }

    public function isEmpty()
    {
        return -1 == $this->top ? true : false;
    }

    public function getLength()
    {
        $i = 0;
        $node = $this->top;
        while ($node) {
            $i++;
            $node = $node->next;
        }
        return $i;
    }

}