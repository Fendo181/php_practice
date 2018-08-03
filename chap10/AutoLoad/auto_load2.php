<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/03
 * Time: 9:04
 */


require_once 'NameSpaceAutoloader.php';

use lib\Person;

//名前空間なし
$animal = new Animal();
$animal->outputVoice('わんわん', 'きゃんきゃん');
print $animal->outputVoice();


//// 名前空間り
$p = new Person('夏休み','太郎');
$p->showName();


