<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/9
 * Time: 13:41
 */

namespace algorithm\Nowcoder;

//请实现一个函数，将一个字符串中的空格替换成“%20”。
//例如，当字符串为We Are Happy.
//则经过替换之后的字符串为We%20Are%20Happy。
class Offer
{
    public function replaceSpace($str)
    {
        $return_str = '';
        for ($i = 0; $i < strlen($str); $i++) {
            $return_str .= $str[$i] === ' ' ? '%20' : $str[$i];
        }
        return $return_str;
    }

    public function printListFromTailToHead($head)
    {
        $arr = [];
        $arr_rev = [];
        $arr[] = $head->val;
        while ($head->next) {
            $arr[] = $head->val;
        }
        for ($i = 1; $i <= count($arr); $i++) {
            $arr_rev[] = $arr[count($arr) - $i];
        }
        return $arr_rev;
    }
}