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

    public function __construct(string $lastName, string $firstName)
    {
        $this->lastName =$lastName;
        $this->firstName=$firstName;
    }

    public function __destruct( )
    {
        echo PHP_EOL;
        echo "オブジェクトが破壊されました。";

    }

    public function showName()
    {
        print "<p>僕の名前は{$this->firstName}{$this->lastName}です!</p>";
    }
}

$human = new Person("F","endo181");
$human->showName();
