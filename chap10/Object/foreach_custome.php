<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/17
 * Time: 9:47
 */

require_once 'Person.php';
require_once 'FriendList.php';

//FriendListオブジェクトにPersonオブジェクトをセットする
$list = new FriendList();
$list->add(new Person('太郎', '山田'));
$list->add(new Person('太徳', '遠藤'));
$list->add(new Person('洋介', '武田'));

// FriendListオブジェクトに内容を順に整理して、そのPerson::show()メソッドを実行している
foreach ($list as $value) {
    echo PHP_EOL;
    print $value->showName();
}
