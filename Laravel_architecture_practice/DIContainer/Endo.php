<?php

require_once dirname(dirname(__DIR__ )). '/vendor/autoload.php';

use Pimple\Container;

$container = new Container();


$container['gameSoft.title'] = '';

$container['gameSoft'] = $container->factory(function($c){
    return new GameSoft($c['gameSoft.title']);
});

$container['ps4'] = $container->factory(function ($c){
    return new Ps4($c['gameSoft']);
});

$container['twitter_client'] = function ($c){
    return new TwitterClient();
};

$container['endo'] = $container->factory(function($c) {
    return new Endo($c['gameSoft'], $c['ps4'], $c['twitter_client']);
});


// インターフェースを作成
interface GameSoftInterface
{
    public  function getTitle();
}


interface GamePlayerInterface
{
    public  function play();
}

interface TwitterClientInterface
{
    public function post();
}


// GameSoftクラス
Class GameSoft implements GameSoftInterface
{
    private $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

// PS4クラス
class Ps4 implements GamePlayerInterface
{
    private $gameSoft;

    public function __construct(GameSoftInterface $gameSoft)
    {
        $this->gameSoft = $gameSoft;
    }

    public function play()
    {
        echo "PS4で{$this->gameSoft->getTitle()}をプレイしたい！！！";
    }
}

class TwitterClient implements TwitterClientInterface
{
    public function post()
    {
        echo "めっちゃ面白いなう！";
    }
}


//クラス作成
class Endo
{
    private $gameSpft;
    private $ps4;
    private $twitter_client;

    public function __construct(GameSoftInterface $gameSpft,GamePlayerInterface $ps4, TwitterClientInterface $twitter_client)
    {
        $this->gameSpft = $gameSpft;
        $this->ps4 = $ps4;
        $this->twitter_client = $twitter_client;
    }

    public function play()
    {
        echo "今日は{$this->gameSpft->getTitle()}を持ってきました！ ";
        echo "{$this->ps4->play()}";
    }

    public function tweet()
    {
        $this->twitter_client->post();
    }
}


$container['gameSoft.title'] = 'SEKIRO';
$endo = $container['endo'];
$endo->play();
$endo->tweet();


//今日はSEKIROを持ってきました！ SEKIROをプレイしたい！！！めっちゃ面白いなう！%
