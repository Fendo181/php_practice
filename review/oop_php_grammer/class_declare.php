<?php

declare(strict_type=1);

class Post
{
  private string $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

$posts = [];
$posts[0] = new Post(5);
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();
