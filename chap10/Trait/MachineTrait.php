<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/05
 * Time: 8:22
 */

// トレイトは定数を持てない
// クラスの継承、インターフェースの実装ができない

trait MachineTrait
{
    private $starting = "Starting....Start!";

    public function run(){
        print $this->starting;
    }
}
