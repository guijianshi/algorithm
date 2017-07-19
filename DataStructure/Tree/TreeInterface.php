<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/11
 * Time: 16:48
 */

namespace DataStructure\Tree;


interface TreeInterface
{
    public function init(&$T);

    public function destroy(&$T);

    public function create(&$T, $define);

    public function isEmpty();

    public function getDepth();

    public function getRoot();

    public function getValue($node);

    public function assign($node, $value);

    public function parent($node);

    public function LeftChild($node);

    public function RightSibling($node);

    public function insert($node, $i, $c);

    public function delete($node, $i);
}