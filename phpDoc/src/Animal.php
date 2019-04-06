<?php

class Animal
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


$dog = new Animal('Dog');
$name = $dog->getName();
echo  $name;
$dog->bark();


$cat = new Animal('Cat','ニャーニャー');
$cat->getName();
$name = $cat->getName();
echo  $name;
$cat->bark();