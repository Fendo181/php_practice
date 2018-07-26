<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/26
 * Time: 9:42
 */

require_once 'Animal.php';

$animal = new Animal();
$animal->outputVoice('わんわん', 'きゃんきゃん');
print $animal->outputVoice();
