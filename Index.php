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
define('OK', 1);
define('NO', 0);
define('YES', 1);
$micro_time = new \algorithm\MircoTime();

$time1 = $micro_time->getMircoTime();
//testLinkList();
//\DataStructure\Test::testLinkList();

//\DataStructure\Test::testDoubleLinkedList();
//echo \algorithm\Other\Other::fbi(20);
\DataStructure\Test::testCircularQueue();
\DataStructure\Test::testLinkedQueue();
$time2 = $micro_time->getMircoTime();

echo '<br/><hr/>', 'cost time: ' . ($time2 - $time1) . ' s';

function dump($data)
{
    Helper::dump($data);
}









