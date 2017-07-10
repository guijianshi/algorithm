<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/6
 * Time: 10:20
 */

namespace DataStructure\Stack;


interface StackInterface
{
    public function init();

    public function clear();

    public function isFull();

    public function getTop();

    public function push($data);

    public function pop(&$data);

    public function isEmpty();

    public function getLength();


}