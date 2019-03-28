<?php


class User
{
    protected $service;

    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    public function doSomething()
    {
        $this->service->sayHi();
    }
}

interface ServiceInterface
{
    public function sayHi();
}


Class HogeService implements ServiceInterface
{
    public function sayHi()
    {
        echo 'Hi! Hoge!';
    }
}

Class FugaService implements ServiceInterface
{
    public function sayHi()
    {
        echo 'Hi! Fuga';
    }
}


// HogeService
$service = new HogeService();
$user = new User($service);
$user->doSomething();

// FugaService
$service = new FugaService();
$user = new User($service);
$user->doSomething();

