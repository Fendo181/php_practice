### PHP入門 ビルトイン関数編

### 学んだ関数

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

### 参考

- [PHP入門 ビルトイン関数編 (全32回) - プログラミングならドットインストール](https://dotinstall.com/lessons/basic_php_functions)
- [PHP: マルチバイト文字列 関数 - Manual](https://www.php.net/manual/ja/ref.mbstring.php)
