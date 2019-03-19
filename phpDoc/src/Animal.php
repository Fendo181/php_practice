<?php

class Dog
{
    protected $name;
    protected $voice;


    public function __construct($name, $voice = 'わんわん')
    {
        $this->name = $name;
        $this->voice = $voice;

    }

    public function bark()
    {
      echo $this->voice;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if(isset($name)){
            return 'please my name';
        }

        $this->name = $name;
    }
}


$dog = new Dog('ポコちゃん');
$dog->bark();
$name = $dog->getName();
echo  $name;


$fuwa = new Dog('ふわちゃん','こんにちは!');
$fuwa->bark();
$fuwa->getName();
$name = $fuwa->getName();
echo  $name;