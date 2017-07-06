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
    public function createStack();

    public function init();

    public function isFull();

    public function push();

    public function isEmpty();

    public function pop();
}