<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/5/4
 * Time: 11:21
 */

namespace algorithm\UglyNumber;

/**
 * 丑数是指pow(2,x)*pow(3,y)*pow(5,z)的数,本算法获取经典的第1500个丑数859963392
 * Class UglyNumber
 * @package algorithm\UglyNumber
 */
class UglyNumber
{
    /**
     * 暴力算法
     * cost:229.50300002098s
     * @param $n
     * @return int
     */
    public function getNumber($n)
    {
        $x = 1;
        $i = 0;
        while (1){
            if($this->validUgly($x)){
                $i++;
                if($i == $n)
                    return $x;
                else
                    $x++;
            }else{
                $x++;
            }
        }
    }

    public function validUgly($x)
    {
        while ($x%2 == 0)
            $x = $x/2;
        while ($x%3 == 0)
            $x = $x/3;
        while ($x%5 == 0)
            $x = $x/5;
        if($x == 1)
            return true;
        else
            return false;
    }

    /**
     * 多队列方式
     * cost:0.00099992752075195s
     * @param $n
     * @return int|mixed
     */
    public function constructUgly($n)
    {
        if($n == 1)
            return 1;
        $queue2 = new \SplQueue();
        $queue3 = new \SplQueue();
        $queue5 = new \SplQueue();
        $queue2->enqueue(2);
        $queue3->enqueue(3);
        $queue5->enqueue(5);
        $x = 1;
        while ($n-- > 1){
            $x = min($queue2->bottom(),$queue3->bottom(),$queue5->bottom());
            switch ($x){
                case $queue2->bottom():
                    $queue2->shift();
                    $queue2->enqueue($x*2);
                    $queue3->enqueue($x*3);
                    $queue5->enqueue($x*5);
                    break;
                case $queue3->bottom():
                    $queue3->shift();
                    $queue3->enqueue($x*3);
                    $queue5->enqueue($x*5);
                    break;
                case $queue5->bottom():
                    $queue5->shift();
                    $queue5->enqueue($x*5);
                    break;
            }
        }
        return $x;



    }

    public function unique_enqueue()
    {
        $queue = new \SplQueue();
    }
}