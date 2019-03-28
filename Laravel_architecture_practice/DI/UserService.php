<?php

class UserService
{
    protected $sender;

    public function __construct(NotifierInterface $sender)
    {
        $this->sender = $sender;
    }
    public function notice($name,$message)
    {
        $this->sender->sayHi($name,$message);
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


$sender = new SayJP();
$man = new UserService($sender);
$man->notice('endo','こんばんわ!'); //はい！endoさん! こんばんわ!

$sender = new SayEN();
$man = new UserService($sender);
$man->notice('endo','こんばんわ!');  //yo！endo! What's Up!こんばんわ!