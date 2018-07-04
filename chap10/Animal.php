<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/05
 * Time: 8:07
 */

abstract class Animal
{
    public abstract function outputVoice(): string;
}

class Cat extends Animal {
    public final function outputVoice(): string
    {
        // TODO: Implement outputVoice() method.
        return "にゃん";
    }
}

class Dog extends Animal {
    public function outputVoice(): string
    {
        // TODO: Implement outputVoice() method.
        return "わん";
    }
}


$cat = new Cat();
print $cat->outputVoice();
echo PHP_EOL;
$dog = new Dog();
print $dog->outputVoice();

//継承しようとすると、エラーがでる
class Bird extends Dog {
    public function outputVoice(): string
    {
        // TODO: Implement outputVoice() method.
        return "I'm a Bird";
    }
}

echo PHP_EOL;
$bird = new Bird();
print $bird->outputVoice();