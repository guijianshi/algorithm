<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/5/4
 * Time: 9:20
 */

namespace algorithm;


class MircoTime
{
    public $mirco_time;

    public function __construct()
    {
        $this->mirco_time = $this->getMircoTime();
    }

    public function getMircoTime()
    {
        list($micro,$second) = explode(' ',microtime());
        $mirco_time = $second+$micro;
        return $mirco_time;
    }
}