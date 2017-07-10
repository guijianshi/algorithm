<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/10
 * Time: 17:23
 */

namespace DataStructure\Queue;

class CircularQueue implements Queue
{
    public $data;

    public $max;

    public $frond;

    public $rear;

    /**
     * CircularQueue constructor.
     * @param $data
     * @param $max
     * @param $frond
     * @param $rear
     */
    public function __construct($data = [], $max = 100, $frond = 0, $rear = 0)
    {
        $this->data = $data;
        $this->max = $max;
        $this->frond = $frond;
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
        return $this->frond == $this->rear ? true : false;
    }

    public function getHead()
    {
        if ($this->frond == $this->rear)
            throw new \Exception('队列为空');
        return $this->data[$this->frond];
    }

    public function enQueue($data)
    {
        if (($this->rear + 1) % $this->max == $this->frond)
            throw new \Exception('队列已满');
        $this->data[$this->rear] = $data;
        $this->rear = ($this->rear + 1) % $this->max;
        return OK;
    }

    public function deQueue(&$data)
    {
        if ($this->frond == $this->rear)
            throw new \Exception('队列为空');
        $data = $this->data[$this->frond];
        $this->frond = ($this->frond + 1) % $this->max;
        return OK;
    }

    public function getLength()
    {
        return ($this->rear - $this->frond + $this->max) % $this->max;
    }

}