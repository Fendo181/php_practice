<?php


class User
{
    public function sayHi()
    {
        echo 'Hello!';
    }
}

$app = new User();
$app->sayHi();