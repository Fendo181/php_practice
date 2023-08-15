<?php

class Post{
  public $text;
  public $likes;

  public function __construct($text,$likes)
  {
    $this->text = $text;
    $this->likes = $likes;
  }

  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}

$posts = [];
$posts[0] = new Post('hello',0);
$posts[1] = new Post('hello again',0);
$posts[0]->show();
$posts[1]->show();
