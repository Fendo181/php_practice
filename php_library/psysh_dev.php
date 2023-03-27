<?php

require_once 'vendor/autoload.php';

class Human {
    public function __construct(private string $name, private int $age) {
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }
}

$human = new Human('Endu', 29);
eval(Psy\sh());
