<?php

class UserService
{
    public function notice(Sender $sender,$name,$message)
    {
        $sender->sayHi($name,$message);
    }
}


class Sender
{
    public function sayHi($name,$message)
    {
        echo "はい！{$name}さん! {$message}";
    }
}

$man = new UserService();
$sender = new Sender();
$man->notice($sender,'endo','こんばんわ!');




