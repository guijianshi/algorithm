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
    public function __construct();

    public function getElem(int $k);

    public function find($e);

    public function insert(int $i, $e);

    public function delete(int $i);

    public function getLength();
}