<?php

class UserService
{
    public function notice(NotifierInterface $sender,$name,$message)
    {
        $sender->sayHi($name,$message);
    }
}

// インーフェース
Interface NotifierInterface
{
    public function sayHi($name,$message);
}

class SayJP implements NotifierInterface
{
    public function sayHi($name,$message){
        echo "はい！{$name}さん! {$message}";
    }
}

class SayEN implements NotifierInterface
{
    public function sayHi($name,$message){
        echo "Yo！{$name}! What's Up!{$message}";
    }
}


$man = new UserService();
$sender = new SayJP();
$man->notice($sender,'endo','こんばんわ!'); //はい！endoさん! こんばんわ!

$sender = new SayEN();
$man->notice($sender,'endo','こんばんわ!');  //yo！endo! What's Up!こんばんわ!




