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
find();
$time2 =  $micro_time->getMircoTime();

echo 'cost time:'.($time2-$time1);


function isort($arr)
{
    $isort = new \algorithm\Isort\Isort();
    $arr = $isort->isort($arr);
    return $arr;
}

function find()
{
    $data = [1,5,8,10,15,20];
    $L = new \DataStructure\LinearList\LinearList($data);
    echo $L->insert(5,13);
    print_r($L->data);
}


