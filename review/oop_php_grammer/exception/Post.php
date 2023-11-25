<?php

class Post
{
  private $text;

  function __construct($text)
  {
    if (strlen($text) <= 3) {
      // echo 'Text too short!'. PHP_EOL;
      // exit;
      // Exception クラスは PHPにあらかじめ組み込まれているものなので
      // クラス定義をせずにそのまま使うことができます。
      throw new Exception('Exception Erro! Text Too short');
    }

    $this->text = $text;
  }

  function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}
