## PHP入門 ビルトイン関数編

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

```php
<?php
$scores = [30, 40, 50, 60, 70];

array_unshift($scores, 10, 20); // 10, 20, 30, 40, 50, 60, 70
array_push($scores, 80, 90); // 10, 20, 30, 40, 50, 60, 70, 80, 90

$value1 = array_shift($scores) // 10
print_r(scores) // 20, 30, 40, 50, 60, 70, 80, 90

$value2 = array_shift($scores) // 90
array_pop($scores) // 20, 30, 40, 50, 60, 70, 80

$partial1 = array_slice($scores , 2);
print_r($scores); // 20, 30, 40, 50, 60, 70, 80
print_r($partial); // 40, 50, 60, 70, 80

$partial12 = array_slice($scores , -2);
print_r($partial1); // 60, 70, 80

// 切り詰める使い方
$scores1 = [30, 40, 50, 60, 70, 80];
array_splice($scores1,2,3);
print_r($scores1); // 30,40,80

// 置換する方法
$scores2 = [30, 40, 50, 60, 70, 80];
array_splice($scores2,2,3,100);
print_r($scores2); // 30,40,80,100

// 指定した位置に要素を入れる方法
$scores3 = [30, 40, 50];
array_splice($scores3,2,0,100);
print_r($scores3); // 20,40,100,50

// 0のインデックスから 5 個分を 10 の値で埋めた配列を作成する
$scores4 = array_fill(0,5,10);
// $scores4 = [10,10,10,10,10

// 1~10 までの値を使って配列を作成する
// array1 = [1,2,3,4,5,6,7,8,9,10];
$array1 = range(1,10);

// 1~10までで、2刻みで値を使って配列を作成する
// array1 = [1,3,5,7,9];
$array2 = range(1,2,10);
```

- [array_unshift](https://www.php.net/manual/ja/function.array-unshift.php)
  - 一つ以上の要素を配列の最初に加える
  - `array_unshift($scores, 10, 20)`
- [array_push](https://www.php.net/manual/ja/function.array-push.php)
  - 一つ以上の要素を配列の最後に追加する
  - `array_push($scores, 60, 70)`
- [array_shift](https://www.php.net/manual/ja/function.array-shift.php)
  - 配列の先頭から要素を一つ取り出す
  - `$value = array_shift($scores)`: この場合は先頭の要素にある `10` が `$value`に格納される
- [array_pop](https://www.php.net/manual/ja/function.array-pop.php)
  - 配列の末尾から要素を一つ取り出す
  - `$value = array_pop($scores)`: この場合は先頭の要素にある `70` が `$value`に格納される
- [array_slice](https://www.php.net/manual/ja/function.array-slice.php)
  - 配列の一部を展開する
  - `array_slice($scores , 2);`
- [array_splice](https://www.php.net/manual/ja/function.array-splice.php)
  - 配列の一部を削除し、他の要素で置換する。または途中の要素を削除して詰める
  - `array_splice(配列、位置、個数、要素)`で指定すると、削除した位置に要素を入れる事ができる
- [array_fill](https://www.php.net/manual/ja/function.array-fill.php)
  - 配列を指定した値で埋める
  - `$scores = array_fill(0,5,10);`
- [range](https://www.php.net/manual/ja/function.range.php)
  - ある範囲の整数を有する配列を作成する
  - `$scores = range(1,10);`: 1~10までの値を使って配列を順々に入れる
  - `$scores = range(1,10,2);`: 1~10まで、2刻みで値を使って配列を順々に入れる
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

#### array_map と array_filter の違い

`array_map` は `array_filter`の大きな違いは区別して適用するか、しないかがでかい。
後、引数の順番が逆。後に来るのが、`array_map`、先に来るのが`array_filter` です。

>mapは、配列要素すべてに除算する関数を実行し、その計算結果を新しい配列で返しています。
>filterは、配列要素の中で除算できる要素を探し、フィルタリングされた要素のみを配列で返しています。
>mapは区別せずにすべての要素を返すのに対し、filterは条件内容によって要素を区別することが大きな違いです

>array_map は マッピング(写像)なので要素数を変えずに各要素を変化させるもの
>array_filter は フィルタリング(ふるい落とし) なので各要素は変えずに要素数を減らすもの。って理解してます。
>ref: https://twitter.com/todays_mitsui/status/1658972790568140800?s=20

- https://twitter.com/kze_yoshi8/status/1658998018245529602?s=20

他には[foreach, array_map, array_walkの比較 - Qiita](https://qiita.com/tadsan/items/0790bbb9a4d1b8264b23)も参考になる

#### 配列のソート関数

ref: https://www.php.net/manual/ja/array.sorting.php

- [sort](https://www.php.net/manual/ja/function.sort.php)
  - 配列を昇順にソートする。
  - このsortは既存のkeyを削除します
- [rsort](https://www.php.net/manual/ja/function.rsort.php)
  - 配列を昇順にソートする
  - このrsortはsortと同様に既存のkeyを削除します
- [asort](https://www.php.net/manual/ja/function.asort.php)
  - 連想キーと要素との関係を維持しつつ配列を昇順にソートする
- [rasort](https://www.php.net/manual/ja/function.arsort.php)
  - 連想キーと要素との関係を維持しつつ配列を降順にソートする
- [ksort](https://www.php.net/manual/ja/function.ksort.php)
  - 配列をキーで昇順にソートする
- [krsort](https://www.php.net/manual/ja/function.krsort.php)
  - 配列をキーで降順にソートする
- [usort](https://www.php.net/manual/ja/function.usort)
  - ユーザー定義の比較関数を使用して、配列を値でソートする
- [array-multisort](https://www.php.net/manual/ja/function.array-multisort.php)
  - 複数または多次元の配列をソートする
  - あまり使わない方がいい。

### ファイル操作を行う関す

- [fopen](https://www.php.net/manual/ja/function.fopen.php)
  - fopen — ファイルまたは URL をオープンする
  - `w`:書き出しのみでオープンします。
    - ファイルポインタをファイルの先頭に置き、 ファイルサイズをゼロにします。ファイルが存在しない場合には作成を試みます。
  - `r`:読み込みのみでオープンします。ファイルポインタをファイルの先頭に置きます。
- [fwrite](https://www.php.net/manual/ja/function.fwrite.php)
  - バイナリセーフなファイル書き込み処理
- [fclose](https://www.php.net/manual/ja/function.fclose.php)
  - オープンされたファイルポインタをクローズする
- [fgets](https://www.php.net/manual/ja/function.fgets.php)
  - ファイルポインタから 1 行取得する。
  - fgetsは終端まで行くと`false`を返します

### 定義済み定数

- [定義済み定数](https://www.php.net/manual/ja/math.constants.php)
  - `M_PI`:パイ（円周率）
  - `M_SQRT2`: 2 の平方根

### 参考

- [PHP入門 ビルトイン関数編 (全32回) - プログラミングならドットインストール](https://dotinstall.com/lessons/basic_php_functions)
- [PHP: マルチバイト文字列 関数 - Manual](https://www.php.net/manual/ja/ref.mbstring.php)
