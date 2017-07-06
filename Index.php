<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/5/4
 * Time: 9:09
 */
define('DIR',__DIR__);
include_once DIR . '/Loader.php';
spl_autoload_register('\\algorithm\\Loader::autoload');
$micro_time = new \algorithm\MircoTime();


$time1 = $micro_time->getMircoTime();
testList();
$time2 =  $micro_time->getMircoTime();

echo 'cost time:'.($time2-$time1);
function testList()
{

    $L = new \DataStructure\LinearList\PtrList();
    $L->insert(1,1);
    $L->insert(2,2);
    $L->insert(3,4);
    var_dump($L);

}






