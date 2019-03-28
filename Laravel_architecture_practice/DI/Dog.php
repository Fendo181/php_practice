<?php

class Dog
{
    public function barks()
    {
        echo'わんわん！';
        $cat =new Cat();
        $cat->meow();
    }
}

class Cat
{
   public function meow()
   {
       echo'にゃーにゃー！';
   }
}

$dog = new Dog();
$dog ->barks();