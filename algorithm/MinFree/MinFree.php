<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/5/4
 * Time: 9:15
 */

namespace algorithm\MinFree;


class MinFree
{
    public $arr;
    public $f;
    public $n;
    public function __construct($max=100000)
    {
        $this->arr = $this->getArr(1000000);
        $this->f = $this->F($max);
        $this->n = count($this->F($max));
    }

    public function getArr($max=1000000)
    {
        for($i = 0; $i<$max;$i++){
            $array[] = mt_rand(0,200000);
        }
//        $array = array_unique($array);
//        $array = array_merge($array,[0,1,2,3,4]);
        echo '数组长度:'.count($array)."\r\n";
        return $array;
    }

    public function F($len=100000)
    {
        for($i=0;$i<sqrt($len);$i++)
        {
            $array[] = false;
        }
        for($i=0;$i<log(sqrt($len),2);$i++)
        {
            if(count($array)>$len)
                break;
            $array = array_merge($array,$array);
        }
        return $array;
    }
    public function minFree()
    {
        foreach ($this->arr as $value){
            if($value < $this->n)
                $this->f[$value] = true;
        }
        foreach ($this->f as $k=>$v){
            if($v == false){
                return $k;
            }

        }
        return -1;
    }
}