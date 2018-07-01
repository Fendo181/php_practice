<?php
/**
 * Created by PhpStorm.
 * User: futoshi.endo
 * Date: 2018/06/30
 * Time: 15:38
 */

require_once "Person.php";

class BusinessPerson extends Person
{
    public final function work(){
        print "<p>僕の名前は{$this->firstName}{$this->lastName}です!</p>\";";
    }

}

$business_person = new BusinessPerson('高橋', '清太郎');
$business_person->work();
echo PHP_EOL;
