## はじめに

この記事は筆者が主に[ドットインストール](https://dotinstall.com)や、公式のPHPドキュメントを参考にPHPにおける基本的なオブジェクト指向に入門したときの記事です。
そのままコードを流用していたり、解説内容が自分が理解できる内容になっているため、不足している部分があります。

主に写経したリポジトリはここにあります。

https://github.com/Fendo181/php_practice/tree/master/review/oop_php_grammer

https://zenn.dev/articles/d742619a0361f9/

___

### PHPにおける基本のクラス定義

PHPで「なぜ、オブジェクト指向を使うのか?」というと、オブジェクト型を使う事による関連する変数や関数をまとめて管理できるので コードの見通しがよくなるというメリット あります。
また今後の拡張性だったり、再利用性だったりも高まります。

クラスを使うには最初に`class` キーワードを使ってクラス名を指定して定義します。
ここではUserがクラス名に相当します。

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

上記のクラスをあくまでもオブジェクト型なので、実態(インスタンス)を生成していきます。
インスタンスを生成するには`new` キーワードを使います。

クラスはあくまでも **オブジェクト型のデータ構造** なので、実態を呼び出してプロパティやメソッドを呼び出すにはインスタンスを生成する必要があります。

```php
<?php
// クラス(オブジェクト型のデータ構造)
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

// インスタンス(実態)
$post = new Post();
$post->text = 'hello';
$post->likes = 0;

// インスタンスのメソッドを呼び出す
$post->show(); // hello (0)
```

### コンストラクタ

インスタンスを生成する際に、自動的に呼び出されるメソッドを **コンストラクタ** と呼びます。
`__construct`を指定する事でインスタンスを生成する際に初期処理を実行する事ができます。

https://www.php.net/manual/ja/language.oop5.decon.php

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
一見オブジェクト指向とは関係ないように見えますが、オブジェクト指向においてはオブジェクト同士が複雑に絡み合うと副作用によって、データ構造が変わったり、予期せぬ処理でバグが生み出してしまう事があります。

そういった問題を防ぐためにも `declare(strict_types=1);`で宣言しておいて、厳密に型チェックをするようにしましょう。

```php
<?php
declare(strict_types=1);
```

### staticキーワード

ref: https://www.php.net/manual/ja/language.oop5.static.php

>クラスプロパティもしくはメソッドを `static` として宣言することで、 クラスのインスタンス化の必要なしにアクセスすることができます。 static として宣言されたプロパティやメソッドは、 インスタンス化されたオブジェクトの内部からも :: (スコープ定義演算子) を使ってコールできます。

staticを使う事でインスタンスを生成しなくても、クラス自体に紐付いたプロパティやメソッドを設定することができます。よって、クラスで定義したメソッドをそのまま呼び出すことができますが、多様は厳禁です。

- `staticプロパティ`
  - インスタンスに紐付かないプロパティ
  - クラスに紐付いたこちらのプロパティをクラスプロパティと呼ぶ
- `staticメソッド`
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

PHPでは `extends`を使うことで親クラス(スーパークラス)のプロパティやメソッドを使うことができます。


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

親クラスの一部のメソッドの挙動を維持したままで、子クラスでメソッドの内容を変更したい場合には、**Override** という機能を使います。

以下のサンプルコードでは`Post`クラスで定義していた`show`メソッドを、 `SponsoredPost` クラスでで同盟のメソッドでオーバーライドしています。

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

### クラスの型の継承

クラスの型の継承については以下のように親クラスの型(`Post`)を指定することで子クラスのインスタンスを生成することができます。

```php
<?php
// 親クラス
class Post
{
}

// 小クラス
class SponsoredPost extends Post
{
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');

// Postを継承しているクラスのデータ型だけの引数を受け取る
function processPost(Post $post)
{
  $post->show();
}

foreach ($posts as $post) {
  processPost($post);
}
```

### 抽象クラス

抽象クラスは、インスタンスを生成することができないクラスのことを指します。
抽象クラスを使うことで、親クラスのメソッドの実装を強制することができます。

```php
<?php

// 抽象クラスはそれ自体からはインスタンスを作ることができない
// 継承を前提としたクラスになります
abstract class BasePost
{
  // 抽象メソッド
  // BasePost クラスを Post と SponsoredPost クラスで継承してあげれば
  // 子クラスのほうで show() メソッドの定義を強制することができる。
  abstract public function show();
}

class Post extends BasePost
{
  protected $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

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
    parent::__construct($text);
    $this->sponsor = $sponsor;
  }

  public function show()
  {
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');

function processPost(Post $post)
{
  $post->show();
}

foreach ($posts as $post) {
  processPost($post);
}
```

更に抽象クラスには共通のプロパティをまとめる事ができます。
抽象クラスはある程度開発の規模が大きくなってから使ったり、子クラスのほうで定義を強制したいというルールを作りたい場合に使うと良いです。


```php
<?php

abstract class BasePost
{

  protected $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  abstract public function show();
```

抽象クラスと型の継承を組み合わせる事で、定義漏れを防ぎつつ、共通の型でまとめて処理できるメリッドがあります。

### インターフェースについて

インターフェースは抽象メソッドだけを持つことができて、その定義を好きなクラスに強制することができるという仕組みです。抽象クラスはメソッドを強制ができますが、インターフェースを作成するときは `interface` キーワードを使います。

```php
<?php

interface LikeInterface
{
  // 抽象メソッド
  public function like();
}
```

インターフェースはクラスの継承関係を気にせずに気軽に好きなクラスに実装させていくことができます。また、継承したクラスでインスタンスを生成した場合には、引数でインターフェースを指定することで、インターフェースを継承したクラスのインスタンスを渡すことができます。

```php
$posts[0] = new Post('hello');
$posts[3] = new PremiumPost('hello there', 300);


function proseccLikeable(LikeInterface $likeable)
{
  $likeable->like();
}

proseccLikeable($posts[0]); // LikeInterfaceを継承しているPostのインスタンスを渡してあげる。
proseccLikeable($posts[3]); // LikeInterfaceを継承しているPremiumPostのインスタンスを渡してあげる。

```

### トレイトについて

トレイトはクラスの継承関係を気にせずに好きなクラスにメソッドを追加することができます。
作る時はは `trait` キーワードを使います。
トレイトは型ではないのでクラスの継承やインターフェースと違って、同じトレイトを使ったからといって、同じ型として扱うことができる訳ではないです。したがって過度に依存するとコードの構造が不透明になる可能性があるため、適切なバランスをとることが重要です

```php
trait LikeTrait
{
  private $likes = 0;

  public function like()
  {
    $this->likes++;
  }
}
```

### オートロード

PHPは外部から読み込むファイルを指定するために、`require` や `include` という関数を使います。しかし、これらの関数を毎回宣言しなくても `spl_autoload_register`を使えば、クラスを読み込むことができます。

`spl_autoload_register`は引数に関数を指定することができて、その関数の中でクラスを読み込む処理を書くことができます。

```php
<?php

// require_once __DIR__ . '/Post.php';

// spl_autoload_register は new をしたときにそのクラスが読み込まれていなかったら呼ばれる関数
// この関数の引数にはクラス名が入る
// したがって、呼ばれなかったタイミングでクラス名をこの無名関数の引数として渡してくれるので、結果require_onceで呼び出すことができる
spl_autoload_register(function ($class) {
  require_once __DIR__ . '/' . $class . '.php';
});

$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

foreach ($posts as $post) {
  $post->show();
}
```

この関数を使えば、`require` や `include`を毎回定義しなくてもクラスを読み込むことができます。

### 名前空間

PHPにおける名前空間は、クラス名や関数名の衝突を防ぐために使われます。
名前空間を使うことで、同じクラス名を使っても、名前空間が違えば別のクラスとして扱うことができます。

```php
<?php

// use Dotinstall\MyPHPApp as MyPHPApp;
use Dotinstall\MyPHPApp;

require('Post.php');

class Post {
  //  Fatal error: Cannot declare class Post, because the name is already in use in /home/dotinstall/Post.php on line 3
}

$posts[0] = new MyPHPApp\Post('hello');
$posts[1] = new MyPHPApp\Post('hello again');

foreach ($posts as $post) {
  $post->show();
}
```

### 例外処理

PHPにおける例外処理は、`try` と `catch` というキーワードを使います。
`try` の中で例外が発生した場合には、`catch` の中の処理が実行されます。

```php
try {
  $posts[0] = new Post('he');
  $posts[1] = new Post('hello again');

  foreach ($posts as $post) {
    $post->show();
  }
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
```

`Exception`はPHPの組み込みクラスで、例外の情報を持っています。
`getMessage()` を使って例外のメッセージを取得する事ができます。
