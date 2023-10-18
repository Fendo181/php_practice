<?php

class Post // 親クラス、スーパークラス
{
  private $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

// 継承クラス
// extends Post とするだけで Post クラスのプロパティやメソッドを使うことができます。
class SponsoredPost extends Post // 子クラス
{
    private $sponser;

    public function __construct($text, $sponser)
    {
      parent::__construct($text);
      $this->sponser = $sponser;
    }

    public function showSponsor()
    {
      printf('%s' . PHP_EOL, $this->sponser);
    }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('Hello Hello','Bob');

$posts[0]->show(); // hello
$posts[1]->show(); // hello again
$posts[2]->show(); // Hello Hello
$posts[2]->showSponsor(); // Bob
