<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/05
 * Time: 8:22
 */

trait MachineTrait
{
    private $starting = "Starting....Start!";

    public function run(){
        print $this->starting;
    }
}
