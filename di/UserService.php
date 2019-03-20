<?php

class UserService
{
    public function notice($name,$message)
    {
        // UserServiceクラスはSenderクラスに依存している
        $sender = new Sender();
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
$man->notice('endo','こんばんわ!');




