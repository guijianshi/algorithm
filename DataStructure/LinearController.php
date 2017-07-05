<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/7/4
 * Time: 8:36
 */

namespace DataStructure;


use DataStructure\LinearList\LinearListAbstract;

class LinearController
{
    public function unionLinear(LinearListAbstract $linear1, LinearListAbstract $linear2)
    {
        $linear1_len = $linear1->getLength();
        $linear2_len = $linear2->getLength();
        for ($i = 1; $i <= $linear2_len; $i++) {
            $item = $linear2->getElem($i);
            if (false !== $linear1->locateElem($item)) {
                $linear1->insert($item);
            }
        }
        return $linear1;
    }

    /**
     * @param LinearListAbstract $linear
     * @param int $i
     * @return mixed
     * @throws \Exception
     */
    public function getElem(LinearListAbstract $linear, int $i)
    {
        if ($linear->getLength() == 0 || $i < 1 || $i > $linear->getLength()) {
            throw new \Exception('输入不正确');
        }
        return $linear->getElem($i - 1);
    }

    public function insert(LinearListAbstract $linear, int $i, $e)
    {
        $linear_len = $linear->getLength();
        if ($linear_len == $linear->getMaxLen()) {
            throw new \Exception('线性表已满');
        }
        if ($i < 1 || $i == $linear_len) {
            throw new \Exception('位置非法');
        }
        if ($i <= $linear_len) {
            for ($k = $linear_len - 1; $k > $i - 1; $k--) {
                $linear->data[$k + 1] = $linear->data[$k];
            }
        }
        $linear->data[$i] = $e;
        $linear->setLengthIncrement();
    }

    public function delete(LinearListAbstract $linear, $i)
    {
        $linear_len = $linear->getLength();
        if ($linear_len == 0) {
            throw new \Exception('空线性表');
        }

        if ($i < 1 || $i > $linear_len) {
            throw new \Exception('位置非法');
        }

        $e = $linear->data[$i - 1];
        if ($i < $linear_len) {
            for ($k = $i; $k < $linear_len; $k++) {
                $linear->data[$k - 1] = $linear->data[$k];
            }
        }

        $linear->length--;
        return $e;
    }
}