<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/5
 * Time: 14:11
 */

namespace DataStructure\LinearList;


interface ListInterface
{
    public function init($data);

    public function getElem($k);

    public function find($e);

    public function insert($i, $e);

    public function delete($i);

    public function length();
}