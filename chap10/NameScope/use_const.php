<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/03
 * Time: 8:52
 */

require_once 'MyUtil.php';

use const chap10\NameScope\AUTHOR;

print AUTHOR;

use function chap10\NameScope\myFunc;

print myFunc();

// 結果
//Endoこんにちは！ PHP!%
