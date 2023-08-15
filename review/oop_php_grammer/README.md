## PHPにおけるオブジェクト指向プログラミングを学ぶ

### 基本のクラス定義

オブジェクト型を使うと、関連する変数や関数をまとめて管理できるのでコードの見通しがぐっとよくなるというメリットがあります。
また今後の拡張性だったり、再利用性だったりも高まります。
最初に`class` キーワードを使ってクラス名を指定して定義する。

```php
<?php
class User {
  public $name;
  public $score;

  public function show() {
    echo "$this->name ($this->score)";
  }
}
```

### インスタンスの生成までの流れ

上記のクラスを使ってインスタンスを生成するには、`new` キーワードを使います。
クラスはあくまでも **データ側の構造** なので、実態を呼び出してプロパティやメソッドを呼び出すには
インスタンスを生成する必要があります。

```php
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
$post = new Post();
$post->text = 'hello';
$post->likes = 0;

// インスタンスのメソッドを呼び出す
$post->show(); // hello (0)
```

### コンストラクタ

インスタンスを生成する際に、自動的に呼び出されるメソッドを **コンストラクタ** と呼びます。

```php
<?php
class Post
{
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
```

## 参考

ref: [PHP入門 オブジェクト編 (全26回) - プログラミングならドットインストール](https://dotinstall.com/lessons/basic_php_objects)
