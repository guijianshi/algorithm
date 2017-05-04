<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/5/4
 * Time: 9:09
 */
define('DIR',__DIR__);
include_once DIR.'/algorithm/Loader.php';
spl_autoload_register('\\algorithm\\Loader::autoload');
$micro_time = new \algorithm\MircoTime();
$unly_number = new \algorithm\UglyNumber\UglyNumber();
$time1 = $micro_time->getMircoTime();
echo $unly_number->constructUgly(1500)."\r\n";
$time2 =  $micro_time->getMircoTime();
echo 'cost time:'.($time2-$time1);


