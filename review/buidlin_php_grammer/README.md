### PHP入門 ビルトイン関数編

### 文字列操作

- [sprintf](https://www.php.net/manual/ja/function.sprintf.php)
  - `%s`で文字列を、`%f`で浮動小数点の値を受け取れる。また、左詰めなどの指定方法も出来る。
- [strlen](https://www.php.net/manual/ja/function.strlen.php)
  - 文字列の長さを計測する
- [trim](https://www.php.net/manual/ja/function.trim)
  - 前後の空白や改行を除去する
- [strpos](https://www.php.net/manual/ja/function.strpos.php)
  - 文字列のから特定の文字があるかを探す。なかったら`false`が返って来る。あったら、見つかった位置番号が返ってくる。
- [str_replace](https://www.php.net/manual/ja/function.str-replace.php)
  - 文字列の特定の文字を別の文字に置き換える
- [mb_strlen](https://www.php.net/manual/ja/function.mb-strlen.php)
  - マルチバイト(日本語)の文字列の長さを計測する
- [mb_strpos](https://dotinstall.com/lessons/basic_php_functions/53904)
  - マルチバイトの文字列の中で特定の文字があるかを探す
- [substr](https://www.php.net/manual/ja/function.substr)
  -  文字列の一部分を返す
- [substr_replace](https://www.php.net/manual/ja/function.substr-replace)
  - 文字列の一部を置換する
- [number_format](https://www.php.net/manual/ja/function.number-format.php)
  - 数字を千の位毎にグループ化してフォーマットする
- [preg_match](https://www.php.net/manual/ja/function.preg-match.php)
  - 正規表現にマッチすると、そのマッチした最初の`matches`に格納する
- [preg_match_all](https://www.php.net/manual/ja/function.preg-match-all.php)
  - 正規表現にマッチすると、そのマッチした文字列を`matches`に格納する

#### 数値操作

- [ceil](https://www.php.net/manual/ja/function.ceil.php)
  - 少数点を切り上げる
- [floor](https://www.php.net/manual/ja/function.floor.php)
  - 少数以下を切り捨てる
- [round](https://www.php.net/manual/ja/function.round.php)
  - 四捨五入して整数にする
- [mt_rand](https://www.php.net/manual/ja/function.mt-rand.php)
  - 乱数を設定する
- [max](https://www.php.net/manual/ja/function.max.php)
  - 最大値を求める
- [min](https://www.php.net/manual/ja/function.min.php)
  - 最小値を求める

### 配列を操作する関数

あまり配列に頼りすぎないように注意をする

- [array_unshift]()
- [array_push]()
- [array_shift]()
- [array_pop]()
- [array_slice]()
- [array_splice()]
- [array_fill]()
- [array_merge](https://www.php.net/manual/ja/function.array-merge.php)
  - 配列を連結させる。
  - `$merged = array_merge($a,$b);`
  - `$merged = [...$a, ...$b];` でも置き換えできる。
- [array_unique](https://www.php.net/manual/ja/function.array-unique.php)
  - 重複した値を取り除く。元配列に変更を加えずに新しい配列を作ってくれる、
  - `$uniques = array_unique($merged);`
- [array_diff](https://www.php.net/manual/ja/function.array-diff.php)
  - 配列の差を計算する。
  - `$dif1 = array_diff($a,$b);`
- [array_intersect](https://www.php.net/manual/ja/function.array-intersect.php)
  - 配列の共通項を計算する
  - `$common = array_intersect($a,$b);`
- [array_map](https://www.php.net/manual/ja/function.array-map.php)
  - 指定した配列の要素に**コールバック関数を適用する**

```php
$prices = [100, 200, 300];
$newPrices = array_map(
  // 無名関数
  function($n) { return $n * 1.1;},
  $prices
);
```

- [array_filter](https://www.php.net/manual/ja/function.array-filter.php)
  - コールバック関数を使用して、**配列の要素をフィルタリング**する

```php
<?php

$numbers = range(1, 10);
// 偶数だけ欲しい
$evenNumbers = array_filter(
  $numbers,
  fn($n) => $n % 2 === 0
);
```

- [range]()
- [count]()


#### array_map と array_filter の違い

`array_map` は `array_filter`の大きな違いは区別して適用するか、しないかがでかい。
後、引数の順番が逆。後に来るのが、`array_map`、先に来るのが`array_filter` です。

>mapは、配列要素すべてに除算する関数を実行し、その計算結果を新しい配列で返しています。
>filterは、配列要素の中で除算できる要素を探し、フィルタリングされた要素のみを配列で返しています。
>mapは区別せずにすべての要素を返すのに対し、filterは条件内容によって要素を区別することが大きな違いです

### 定義済み定数

- [定義済み定数](https://www.php.net/manual/ja/math.constants.php)
  - `M_PI`:パイ（円周率）
  - `M_SQRT2`: 2 の平方根

### 参考

- [PHP入門 ビルトイン関数編 (全32回) - プログラミングならドットインストール](https://dotinstall.com/lessons/basic_php_functions)
- [PHP: マルチバイト文字列 関数 - Manual](https://www.php.net/manual/ja/ref.mbstring.php)
