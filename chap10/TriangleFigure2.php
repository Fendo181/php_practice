<?php
/**
 * Created by PhpStorm.
 * User: futoshi.endo
 * Date: 2018/06/30
 * Time: 15:00
 */

class TriangleFigure
{
    private $base;
    private $height;

    // プロパティ値を初期化
    public function __construct()
    {
        $this->setBase(1);
        $this->setHeight(2);
    }

    // $baseのセッター
    public function setBase(float $base)
    {
        if ($base > 0) {
            $this->base = $base;
        }
    }

    // $hightのセッター
    public function setHeight(float $height)
    {
        if ($height > 0) {
            $this->heightht = $height;
        }
    }

    // $baseのゲッター
    public function getBase(): float
    {
        return $this->base;
    }

    // $Heightのゲッター
    public function getHeight(): float
    {
        return $this->height;
    }

    //getterを呼び出して計算させる。
    public function getArea() :float
    {
        return $this->getBase() * $this->getBase() / 2;
    }
}
