<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/01
 * Time: 7:40
 */

require_once 'Person.php';
require_once 'FriendList.php';

$list = new FriendList();
$list->add(new Person('太郎','山田'));
$list->add(new Person('遠藤','太徳'));
$list->add(new Person('高橋','清太郎'));

$list2 = clone $list;
// シャローコピー 参照はそのままのコピーになる。
var_dump($list2(1) === $list(1)); #false
