<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/5/4
 * Time: 9:09
 */
define('DIR', __DIR__);
include_once DIR . '/Loader.php';
spl_autoload_register('\\algorithm\\Loader::autoload');
$micro_time = new \algorithm\MircoTime();


$time1 = $micro_time->getMircoTime();
testLinkList();
$time2 = $micro_time->getMircoTime();

echo 'cost time:' . ($time2 - $time1);
/**
 * 单向链表测试代码
 */
function testLinkList()
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
    $L->deleteItem(2);//35,9,7,3,5,6   return 34
    echo $L->getLength(), '<br>';//6
    var_dump($L->listItem($L->getHeader()));

}






