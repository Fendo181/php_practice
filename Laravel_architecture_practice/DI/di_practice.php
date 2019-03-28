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

interface TwitterClientINterface
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
        return $this->title();
    }
}

// PS4クラス
class Ps4 implements GamePlayerInterface
{
    private $gameDisc;

    public function __construct(GameSoftInterface $gameDisc)
    {
        $this->gameDisc = $gameDisc;
    }

    public function play()
    {
        echo "{$this->gameDisc->getTitle()}をプレイしたい！！！";
    }
}

class TwitterClient implements TwitterClientInterface
{
    public function post()
    {
        echo "めっちゃ面白いなう！";
    }
}









