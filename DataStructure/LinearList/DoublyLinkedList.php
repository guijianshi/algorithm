<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/4
 * Time: 11:07
 */

namespace DataStructure\LinearList;


class ListNode
{
    public $data;

    public $prev;

    public $next;

    public function __construct($data = null, ListNode $prev = null, ListNode $next = null)
    {
        $this->data = $data;
        $this->prev = $prev;
        $this->next = $next;
    }
}


class DoublyLinkedList implements ListInterface
{
    public $head;

    public $length;

    /**
     * DoublyLinkedList constructor.
     * @param $head
     */
    public function __construct()
    {
        $this->head = new ListNode();
        $this->length = 0;
    }

    public function getElem(int $i)
    {
        if ($i < 1 || $i > $this->length)
            throw new \Exception('删除位置非法');
        $node = $this->head->next;
        for ($k = 1; $k < $i; $k++) {
            $node = $node->next;
        }
        return $node;

    }

    public function find($e)
    {
        $node = $this->head->next;
        $i = 1;
        while ($node && $node->data != $e) {
            $node = $node->next;
            $i++;
        }
        return $node && $node->data == $e ? $node : false;
    }

    public function insert(int $i, $e)
    {
        if ($i < 1 || $i > $this->length + 1)
            throw new \Exception('插入位置非法');
        $node = new ListNode($e);
        $preNode = $this->head;
        for ($k = 1; $k < $i; $k++) {
            $preNode = $preNode->next;
        }
        $nextNode = $preNode->next;
        $preNode->next = &$node;
        if ($i != 1) $node->prev = &$preNode;
        if ($nextNode) {
            $nextNode->prev = &$node;
            $node->next = &$nextNode;
        }
        $this->length++;
        return true;
    }

    public function delete(int $i)
    {
        if ($i < 1 || $i > $this->length)
            throw new \Exception('删除位置非法');
        $preNode = $this->head;
        for ($k = 1; $k < $i; $k++) {
            $preNode = $preNode->next;
        }
        $delNode = $preNode->next;
        $preNode->next = &$delNode->next;
        $delNode->next->prev = &$preNode;
        $this->length--;
        return $delNode->data;
    }

    public function getLength(): int
    {
        $j = 0;
        $node = $this->head;
        while ($node->next) {
            $j++;
        }
        return $j;
    }


}