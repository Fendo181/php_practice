<?php

class Post
{
  private $text;

  function __construct($text)
  {
    $this->text = $text;
  }

  function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}
