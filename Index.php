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



$data = \algorithm\Data\Data::generateArr(10000);
echo count($data)."\r\n";

$time1 = $micro_time->getMircoTime();
isort($data);
$time2 =  $micro_time->getMircoTime();

echo 'cost time:'.($time2-$time1);


function isort($arr)
{
    $isort = new \algorithm\Isort\Isort();
    $arr = $isort->isort($arr);
    return $arr;
}


