<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/23
 * Time: 23:35
 */
//
namespace lib;

class Person
{
    public $lastName;
    public $firstName;

    public function __toString()
    {
        return $this->lastName.$this->firstName;
    }

    public function __construct($lastNmae, $firstName)
    {
        $this->lastName = $lastNmae;
        $this->firstName = $firstName;
    }

    // var_dumpが呼び出された際に呼ばれるメソッドです。
    // 「名前」 => 「値」の形式で返すようにします。
    public function __debugInfo()
    {
        return [
            '名' => $this->firstName,
            '性' => $this->lastName,
        ];
    }

    public function showName()
    {
        print "<p>僕の名前は{$this->firstName}{$this->lastName}です!</p>";
    }
}

//$human = new Person("F", "endo181");
//$human->showName();
//echo PHP_EOL;
