<?php

class Post
{
  private $text;
  // staticを使うとクラス自体に紐付いたプロパティやメソッドも設定する
  // クラスに紐付いたこちらのプロパティをクラスプロパティ
  private static $count = 0;

  public function __construct($text)
  {
    $this->text = $text;
    // static をつけたプロパティは、 self:: と変数名でアクセスできます
    self::$count++;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }

  // クラスに紐づいたメソッドのことをクラスメソッド
  public static function showInfo()
  {
    printf('Count: %d' . PHP_EOL, self::$count++);
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();

Post::showInfo(); //2
