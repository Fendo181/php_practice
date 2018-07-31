<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/01
 * Time: 8:26
 */

require_once 'Person.php';

$p = new Person('小次郎', '佐藤');
var_dump($p);


//object(Person)#1 (2) {
//["名"]=>
//  string(6) "佐藤"
//["性"]=>
//  string(9) "小次郎"
//}
