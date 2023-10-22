## PHPにおけるオブジェクト指向プログラミングを学ぶ

### 基本のクラス定義

オブジェクト型を使うと関連する変数や関数をまとめて管理できるのでコードの見通しがよくなるというメリットがあります。また今後の拡張性だったり、再利用性だったりも高まります。

クラスを使うには最初に`class` キーワードを使ってクラス名を指定して定義します。

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

### strict_type について

PHPは数値である 5 をコンストラクタに渡したとしても、 PHP はこれを文字列に変換して暗黙的に型変換をしてしまいます。

```php
<?php

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
$posts[0]->show(); #5
```

この場合明確に型変換をして、弾きたい場合は `strict_type` を使います。

```php
<?php
declare(strict_types=1);
```

### static キーワード

ref: https://www.php.net/manual/ja/language.oop5.static.php

>クラスプロパティもしくはメソッドを `static` として宣言することで、 クラスのインスタンス化の必要なしにアクセスすることができます。 static として宣言されたプロパティやメソッドは、 インスタンス化されたオブジェクトの内部からも :: (スコープ定義演算子) を使ってコールできます。

staticを使う事でインスタンスを生成しなくても、クラス自体に紐付いたプロパティやメソッドを設定することができます。よって、クラスで定義したメソッドをそのまま呼び出すことができます。(多様は厳禁)

- staticプロパティ
  - インスタンスに紐付かないプロパティ
  - クラスに紐付いたこちらのプロパティをクラスプロパティと呼ぶ
- staticメソッド
  - インスタンスに紐付かないメソッド
  - クラスに紐付いたメソッドのことをクラスメソッドと呼ぶ
  - https://www.php.net/manual/ja/language.oop5.static.php

```php
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
```

### オブジェクト定数

オブジェクト定数はself::を使ってアクセスします。
また、`public const`で指定した場合には `Post::VERSION2`で指定することができます。
`private const`の場合には、クラス内でしかアクセスできないのでエラーになります。


```php
class Post
{
  private $text;
  private static $count = 0;
  // クラスに紐付いた定数を「オブジェクト定数」と呼びます
  private const VERSION1 = 0.1;
  public const VERSION2 = 0.2;

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
    printf('Version: %.1f' . PHP_EOL, self::VERSION2); // 0.2
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();

Post::showInfo();

echo Post::VERSION1 . PHP_EOL; // Uncaught Error: Cannot access private constant Post::VERSION1
echo Post::VERSION2 . PHP_EOL;
```

### クラスの継承について

- `extends`を使うことで親クラス(スーパークラス)のプロパティやメソッドを使うことができます。


```php
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

}
```

### Overridについて

親クラスの一部のメソッドの挙動を維持したままで、子クラスでメソッドの内容を変更したい場合には、
**Override** という機能を使います。
以下のサンプルコードでは SponsoredPost クラスで show() メソッドをオーバーライドしています。

```php
<?php

class Post
{
  // private $text;
  protected $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  // final キーワードはオーバーライドが禁止になる
//   final public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

class SponsoredPost extends Post
{
  private $sponsor;

  public function __construct($text, $sponsor)
  {
    parent::__construct($text); // 親クラスのプロパティをそのまま使う
    $this->sponsor = $sponsor;
  }

  // Override
  public function show()
  {
    // $this->text は Postクラス(親)で定義しているのでprotectedにしないと呼べない
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }

  public function showSponsor()
  {
    printf('%s' . PHP_EOL, $this->sponsor);
  }

}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');

$posts[0]->show(); // hello // Post
$posts[1]->show(); // hello again  // Post
$posts[2]->show(); // hello hello by dotinstall // SponsoredPost exttends Post
$posts[2]->showSponsor();
```

## 参考

ref: [PHP入門 オブジェクト編 (全26回) - プログラミングならドットインストール](https://dotinstall.com/lessons/basic_php_objects)
