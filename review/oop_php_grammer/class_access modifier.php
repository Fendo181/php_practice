<?php

class Post
{
  public $text;
  // private にしてあげるとこのクラスの中でしか使えなくなります
  private $likes = 0;

  public function __construct($text)
  {
    $this->text = $text;
  }

  // メソッドのアクセス修飾子を付け忘れると public になってしまいます。
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

// $posts[0]->likes++;
$posts[0]->likes = -100; // private後はCannot access private propertyと表示される

$posts[0]->show(); // hello (1)
$posts[1]->show();
