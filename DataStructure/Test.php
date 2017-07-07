<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/7
 * Time: 13:24
 */

namespace DataStructure;


use DataStructure\LinearList\DoublyLinkedList;
use DataStructure\LinearList\LinearList;

class Test
{
    /**
     * 测试顺序线性表
     */
    public static function testLinearList()
    {
        $L = new LinearList([11, 22, 34, 37, 49, 113, 134]);
        $L->insert(1, 1);//1,11,22,34,37,49,113,134
        $L->insert(2, 3);//1,3,11,22,34,37,49,113,134
        $L->insert(5, 55);//1,3,11,22,55,34,37,49,113,134
        echo $L->find(22), '<br/>';// 4
        echo $L->delete(3), '<br/>';//1,3,22,55,34,37,49,113,134
        echo $L->delete($L->find(113)), '<br/>';//1,3,22,55,34,37,49,    134
        print_r($L->getData());

    }


    /**
     * 单向链表测试代码
     */
    public static function testLinkList()
    {

        $L = new \DataStructure\LinearList\LinkList();
        $L->addHead(3);//3
        $L->addHead(34);// 34,3
        $L->addHead(35);//35,34,3
        $L->addTail(5);//35,34,3,5
        $L->addTail(6);//35,34,3,5,6
        $L->insert(3, 7);//35,34,7,3,5,6
        echo $L->find(3), '<br/>';//postion = 4
        echo $L->getElem(5), '<br/>';// 5
        $L->insert(3, 9);//35,34,9,7,3,5,6
        $L->delete(2);//35,9,7,3,5,6   return 34
        echo $L->getLength(), '<br>';//6
        var_dump($L->listItem($L->getHeader()));
        $L->clear();
        var_dump($L->listItem($L->getHeader()));
    }

    public static function testDoubleLinkedList()
    {
        $L = new DoublyLinkedList();
        $L->insert(1, 10);
        $L->insert(2, 18);
        $L->insert(3, 28);
        $L->insert(2, 21);
        $L->insert(4, 112);
        \Helper::dump($L->find(21));
        \Helper::dump($L->getElem(4));
        \Helper::dump($L->find(21));
        \Helper::dump($L->delete(2));
        \Helper::dump($L);
    }
}