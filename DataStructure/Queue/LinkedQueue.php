<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/12
 * Time: 8:35
 */

namespace DataStructure\Queue;


use DataStructure\Node\SinglePointerNode;

class LinkedQueue implements Queue
{
    public $front;

    public $rear;

    /**
     * LinkedQueue constructor.
     * @param $front
     * @param $rear
     */
    public function __construct()
    {
        $this->front = new SinglePointerNode();
        $this->rear = &$this->front;
    }

    public function init()
    {
        // TODO: Implement init() method.
    }

    public function clear()
    {
        unset($this->front->next);
        unset($this->rear);
        $this->rear = &$this->front;
    }

    public function isEmpty()
    {
        return null != $this->front->next ? : false;
    }

    public function getHead()
    {
        if (null == $this->front->next)
            throw new \Exception("队列为空");
        return $this->front->next->data;
    }

    public function enQueue($data)
    {
        $node = new SinglePointerNode($data);
        $this->rear->next = $node;
        $this->rear = &$this->rear->next;
    }

    public function deQueue(&$data)
    {
        if ($this->front == $this->rear)
            throw new \Exception('队列为空');
        $data = $this->front->next->data;
        $this->front->next = &$this->front->next->next;
        return OK;
    }

    public function getLength()
    {
        $i = 0;
        $node = $this->front;
        while ($node->next) {
            $node = $node->next;
            $i++;
        }
        return $i;
    }


}