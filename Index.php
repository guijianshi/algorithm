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
//testLinkList();
//\DataStructure\Test::testLinkList();
echo "<br/>";
echo "<hr/>";
echo "<br/>";
\DataStructure\Test::testDoubleLinkedList();

$time2 = $micro_time->getMircoTime();

echo '<br/><hr/>', 'cost time: ' . ($time2 - $time1) . ' s';









