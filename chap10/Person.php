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

    public function __construct($lastNmae , $firstName)
    {
        $this->lastName = $lastNmae;
        $this->firstName = $firstName;

    }

    public function showName()
    {
        print "<p>僕の名前は{$this->firstName}{$this->lastName}です!</p>";
        echo PHP_EOL;
    }
}

$human = new Person("F","endo181");
$human->showName();


