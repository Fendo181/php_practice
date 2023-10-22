<?php

class Post
{
  // private $text;
  protected $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  // final キーワードはオーバーライドが禁止になる
//   final public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

class SponsoredPost extends Post
{
  private $sponsor;

  public function __construct($text, $sponsor)
  {
    parent::__construct($text); // 親クラスのプロパティをそのまま使う
    $this->sponsor = $sponsor;
  }

  // Override
  public function show()
  {
    // $this->text は Postクラス(親)で定義しているのでprotectedにしないと呼べない
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }

  public function showSponsor()
  {
    printf('%s' . PHP_EOL, $this->sponsor);
  }

}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');

$posts[0]->show(); // hello // Post
$posts[1]->show(); // hello again  // Post
$posts[2]->show(); // hello hello by dotinstall // SponsoredPost exttends Post
$posts[2]->showSponsor();
