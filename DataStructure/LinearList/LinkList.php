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

/**
 * 单向链表实现
 * Class LinkList
 * @package DataStructure\LinearList
 */
class LinkList implements ListInterface
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
     * @return mixed
     * @throws \Exception
     */
    public function getElem(int $i)
    {
        if ($i < 1 || $i > $this->length) {
            throw new \Exception('参数越界');
        }
        $node = $this->header;
        for ($k = 1; $k <= $i; $k++) {
            $node = $node->next;
        }
        return $node->data;
    }

    /**
     * O(n)
     * @param $e
     * @return int
     * @throws \Exception
     */
    public function find($e): int
    {
        if ($this->isEmpty()) {
            throw new \Exception('空表');
        }
        $i = 1;
        /* @var $current ListNode */
        $current = $this->header->next;
        while ($current->readNode() != $e && null != $current->next) {
            $i++;
            $current = $current->next;
        }
        return $current->readNode() == $e ? $i : -1;
    }

    /**
     * O(n)
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
        /*找到插入元素前一项*/
        $precious = $this->header;
        for ($k = 1; $k <= $i - 1; $k++) {
            $precious = $precious->next;
        }
        $node->next = $precious->next;
        $precious->next = &$node;
        $this->length++;
        return true;
    }

    /**
     * O(n)
     * @param int $i
     * @return mixed
     * @throws \Exception
     */
    public function delete(int $i)
    {
        if ($i < 1 || $i > $this->length) {
            throw new \Exception('删除位置非法');
        }
        /*找到删除元素前一项*/
        /* @var $precious ,$delete_item ListNode */
        $precious = $this->header;
        for ($k = 1; $k <= $i - 1; $k++) {
            $precious = $precious->next;
        }
        $delete_item = $precious->next;
        $precious->next = $delete_item->next;
        $this->length--;
        return $delete_item->data;
    }

    /**
     * O(1)
     * @param $e
     * @return bool
     */
    public function addHead($e)
    {
        $node = new ListNode($e);
        $node->next = $this->header->next;
        $this->header->next = &$node;
        $this->length++;
        return true;
    }

    public function addTail($e)
    {
        /* @var $p ListNode */
        $node = new ListNode($e);
        $p = &$this->header->next;
        while ($p->next) {
            $p = &$p->next;
        }
        $p->next = &$node;
        $this->length++;
        return true;
    }

    /**
     * O(n)
     * @return int
     */
    public function getLength(): int
    {
        $j = 0;
        $p = $this->header;
        while ($p->next) {
            $j++;
            $p = $p->next;
        }
        return $j;
//        return $this->length;
    }

    /**
     * O(1)
     * @return ListNode
     */
    public function getHeader(): ListNode
    {
        return $this->header;
    }

    /**
     * O(n)
     * @param ListNode $node
     * @return array
     */
    public function listItem(ListNode $node): array
    {
        $data = [];
        $current = $node->next;
        while ($current) {
            $data[] = $current->data;
            $current = $current->next;
        }
        return $data;
    }

    public function clear()
    {
        $p = $this->header->next;
        while ($p) {
            $q = $p->next;
            unset($p);
            $p = $q;
        }
        $this->header->next = null;
        return true;
    }
}

