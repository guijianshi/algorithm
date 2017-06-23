<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/5/4
 * Time: 9:12
 */

namespace algorithm;


class Loader
{
    static function autoload($class)
    {
        require_once DIR.'/'.str_replace('\\','/',$class).'.php';
    }
}