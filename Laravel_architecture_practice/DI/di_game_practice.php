<?php


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


$ps4Soft =new GameSoft('SEKIRO');
$ps4 = new Ps4($ps4Soft);
$twitter_client = new TwitterClient();

$endo = new Endo($ps4Soft,$ps4,$twitter_client);
$endo->play();
$endo->tweet();

//給付はSEKIROを持ってきました！ SEKIROをプレイしたい！！！めっちゃ面白いなう！%

//Xbox360に入れ替えてみる


// PS4クラス
class Xbox360 implements GamePlayerInterface
{
    private $gameSoft;

    public function __construct(GameSoftInterface $gameSoft)
    {
        $this->gameSoft = $gameSoft;
    }

    public function play()
    {
        echo "Xbox360で{$this->gameSoft->getTitle()}をプレイしたい！！！";
    }
}


$xbox360Soft =new GameSoft('Halo3');
$xbox360 = new Xbox360($xbox360Soft);
$twitter_client = new TwitterClient();

$nikonama = new Endo($xbox360Soft,$xbox360,$twitter_client);
$nikonama->play();
$nikonama->tweet();







