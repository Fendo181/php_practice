<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/02
 * Time: 8:55
 */

// インターフェース
// 配下が全て抽象メソッドなので、abstractを宣言しなくてもよい
interface IFigure {
    function getArea() : float;
}