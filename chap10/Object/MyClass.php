<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/13
 * Time: 9:58
 */

class MyClass
{
    public $pub = "pub";
    protected $pro = "protected";
    private $pr = "private";

    public function showProperty()
    {
        foreach ($this as $key => $value) {
            print "{$key}:{$value}";
            echo PHP_EOL;
        }
    }
}
