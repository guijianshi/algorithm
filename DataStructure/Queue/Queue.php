<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/10
 * Time: 17:17
 */

namespace DataStructure\Queue;


interface Queue
{
    public function init();

    public function clear();

    public function isEmpty();

    public function getHead();

    public function enQueue($data);

    public function deQueue(&$data);

    public function getLength();
}