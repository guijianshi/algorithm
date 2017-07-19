<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/12
 * Time: 8:39
 */

namespace DataStructure\Node;


class SinglePointerNode
{
    public $data;

    public $next;

    /**
     * SinglePointerNode constructor.
     * @param $data
     * @param $next
     */
    public function __construct($data = [], $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }


}