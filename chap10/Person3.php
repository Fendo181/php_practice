<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/23
 * Time: 23:35
 */

class Person
{
    public $lastName;
    public $firstName;

    public function showName()
    {
        print "<p>僕の名前は{$this->firstName}{$this->lastName}です!</p>";
    }
}

$human = new Person();
$human->firstName="F";
$human->lastName="endo181";
$human->showName();
