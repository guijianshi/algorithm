<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/6
 * Time: 9:38
 */

namespace DataStructure\LinearList;


/**
 * 链表节点
 * Class ListNode
 * @package DataStructure\LinearList
 */
class ListNode
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}

class PtrList
{
    /* @var $header ListNode */
    private $header;

    private $length;

    public function __construct()
    {
        $this->header = new ListNode(null);
        $this->length = 0;
    }

    public function isEmpty()
    {
        return $this->header->next ? false : true;
    }

    /**
     * O(n)
     * @param int $i
     * @return null
     * @throws \Exception
     */
    public function getElem(int $i)
    {
        if ($i < 1 || $i > $this->length) {
            throw new \Exception('参数越界');
        }
        for ($k = 1; $k <= $i; $k++) {
            $node = $this->header->next;
        }
        return $node;
    }

    /**
     * O(n)
     * @param $e
     * @return int
     * @throws \Exception
     */
    public function find($e)
    {
        if ($this->isEmpty()) {
            throw new \Exception('空表');
        }
        $i = 1;
        $current = $this->header->next;
        while ($current->readNode() != $e || null != $current->next) {
            $i++;
            $current = $current->next;
        }
        return $current->readNode() == $e ? $i : -1;
    }

    /**
     * @param int $i
     * @param $e
     * @return bool
     * @throws \Exception
     */
    public function insert(int $i, $e)
    {
        /*插入位置从头部到尾部之间,不得越界*/
        if ($i < 1 || $i > $this->length + 1) {
            throw new \Exception('插入位置非法');
        }
        $node = new ListNode($e);
        $precious = &$this->header;
        for ($k = 1; $k < $i - 1; $k++) {
            $precious = $precious->next;
        }
        $node->next = $precious->next;
        $precious->next = &$node;
        $this->length++;
        return true;
    }

    public function addHead($e)
    {
        $node = new ListNode($e);
        $node->next = &$this->header->next;
        $this->header->next = &$node;
        $this->length++;
        return true;
    }

    public function addTail($e)
    {
        $node = new ListNode($e);
        $p = &$this->header->next;
        while ($p->next) {
            $p = &$p->next;
        }
        $p->next = $node;
        $this->length++;
        return true;
    }

    public function getLength()
    {
        $j = 0;
        $p = $this->header;
        while ($p->next) {
            $j++;
            $p = $p->next;
        }
    }

    /**
     * @return ListNode
     */
    public function getHeader(): ListNode
    {
        return $this->header;
    }


}

