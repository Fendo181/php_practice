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

## 参考

ref: [PHP入門 オブジェクト編 (全26回) - プログラミングならドットインストール](https://dotinstall.com/lessons/basic_php_objects)
