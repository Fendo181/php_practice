<?php

// クラス(データ型の構造)
class Post
{
  // プロパティ
  public $text;
  public $likes;

  // メソッド
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}

// インスタンス
$post[0] = new Post();
$post[0]->text = 'hello';
$post[0]->likes = 0;

$post[1] = new Post();
$post[1]->text = 'hello again';
$post[1]->likes = 0;


$post[0]->show(); // hello (0)
$post[1]->show(); // hello again (0)
