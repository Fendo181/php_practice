<?php
/**
 * Created by PhpStorm.
 * User: futoshi.endo
 * Date: 2018/06/30
 * Time: 15:38
 */

require_once "BusinessPerson.php";

class EleteBusinessPerson extends BusinessPerson
{
    public function work()
    {
        print "<p>僕の名前は{$this->firstName}{$this->lastName}はバリバリ働いています!</p>\";";
    }
}

$elete_business_person = new EleteBusinessPerson('野本', '承太郎');
$elete_business_person->work();
$elete_business_person->showName();
echo PHP_EOL;
