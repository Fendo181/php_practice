<?php

// illuminate 関連のパッケージを取得した
require  "../vendor/autoload.php";

class User
{
    public function sayHi()
    {
        echo 'Hello!';
    }

    public function sayMyPetName($animal)
    {
        echo "私が飼っている犬の名前は{$animal}です!";
    }
}

class Animal
{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }


    public  function getName()
    {
        return $this->name;
    }
}


// 通常の方法
$app = new User();
$app->sayHi();
$container = new \Illuminate\Container\Container();
// makeでサービスコンテナを作成して、Userのインスタンスを受けとりメソッドを実行する
$container->make('User')->sayHi();

//買っているペットの名前が欲しい

$dog = new Animal('ポコちゃん');
$dogName = $dog->getName();
echo $dogName;
// 再度インスタンスを作成(あえて)
$app = new User();
$app->sayMyPetName($dogName);