<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/13
 * Time: 16:28
 */

namespace DataStructure\Tree;


class CTNode
{
    public $child;
    public $next;
}

class Header
{
    public $data;
    public $childNode;

    /**
     * Header constructor.
     * @param $data
     * @param $childNode
     */
    public function __construct($data, CTNode $childNode = null)
    {
        $this->data = $data;
        $this->childNode = $childNode;
    }

}
class Tree
{
    
}