<?php


class Person
{
    private $firstName;
    protected $lastName;

    //これだけだとインスタンス変数を返すだけで何もしない
    private function getFirstName() {
        return $this->firstName;
    }

    private function getLastName() {
        return$this->lastName;
    }
}
