<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/10
 * Time: 17:23
 */

namespace DataStructure\Queue;

/**
 * 要求要有一个空位置,以区分队列满和队列空的情况
 * Class CircularQueue
 * @package DataStructure\Queue
 */
class CircularQueue implements Queue
{
    public $data;

    public $max;

    public $front;

    public $rear;

    /**
     * CircularQueue constructor.
     * @param $data
     * @param $max
     * @param $front
     * @param $rear
     */
    public function __construct($data = [], $max = 100, $front = 0, $rear = 0)
    {
        $this->data = $data;
        $this->max = $max;
        $this->front = $front;
        $this->rear = $rear;
    }


    public function init()
    {
        // TODO: Implement init() method.
    }

    public function clear()
    {
        $this->__construct();
        return OK;
    }

    public function isEmpty()
    {
        return $this->front == $this->rear ? true : false;
    }

    public function getHead()
    {
        if ($this->front == $this->rear)
            throw new \Exception('队列为空');
        return $this->data[$this->front];
    }

    public function enQueue($data)
    {
        if (($this->rear + 1) % $this->max == $this->front)
            throw new \Exception('队列已满');
        $this->data[$this->rear] = $data;
        $this->rear = ($this->rear + 1) % $this->max;
        return OK;
    }

    public function deQueue(&$data)
    {
        if ($this->front == $this->rear)
            throw new \Exception('队列为空');
        $data = $this->data[$this->front];
        $this->front = ($this->front + 1) % $this->max;
        return OK;
    }

    public function getLength()
    {
        return ($this->rear - $this->front + $this->max) % $this->max;
    }

}