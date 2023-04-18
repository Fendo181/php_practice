<?php

$numbers = range(1, 10);

// array_filter
// array_filter() を使ってあげると、例えばそれぞれの要素に true か false を返す関数を適用してあげて、 true だったものについてのみ要素を取り出して、新しい配列を返してくれるという仕組みになっています。

// 偶数だけ欲しい
$evenNumbers = array_filter(
  $numbers,
  // function($n) {
    // if( $n%2 === 0 ){
    //   return true;
    // }  else {
    //   return false;
    // }
  // }

  // return $n % 2 === 0;

  fn($n) => $n % 2 === 0
);

print_r($evenNumbers);
