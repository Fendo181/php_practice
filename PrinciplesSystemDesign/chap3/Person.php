<?php

class Person
{
    private $firstName;
    protected $lastName;

    public function __construct($firstName,$lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName() {
        return "MyName is {$this->firstName}.{$this->lastName}";
    }

}

$endo = new Person("Endo","Futoshi");
echo  $endo->fullName();

