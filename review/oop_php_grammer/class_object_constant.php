<?php

class Post
{
  private $text;
  private static $count = 0;
  // クラスに紐付いた定数を「オブジェクト定数」と呼びます
  // private const VERSION = 0.1;
  public const VERSION = 0.2;

  public function __construct($text)
  {
    $this->text = $text;
    self::$count++;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }

  public static function showInfo()
  {
    printf('Count: %d' . PHP_EOL, self::$count);
    printf('Version: %.1f' . PHP_EOL, self::VERSION); // 0.2
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();

Post::showInfo();

echo Post::VERSION . PHP_EOL;
