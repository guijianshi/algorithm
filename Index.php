<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/5/4
 * Time: 9:09
 */
define('DIR', __DIR__);
include_once DIR . '/Loader.php';
include_once DIR . '/help.php';
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
//\DataStructure\Test::testCircularQueue();
//\DataStructure\Test::testLinkedQueue();
//$time2 = $micro_time->getMircoTime();
//
//$test = new \algorithm\Test\SearchTest();
//echo $test->fibonacci(10);
//
//echo '<br/><hr/>', 'cost time: ' . ($time2 - $time1) . ' s';
$arr = [3,2,9,5,4,88,45,21,13,84,99,74,56];
$test = new Test();
$arr1 = $test->bubble($arr);
dump($arr1);
$arr2 = $test->select($arr);
dump($arr2);











