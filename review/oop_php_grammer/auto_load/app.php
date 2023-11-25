<?php

// require_once __DIR__ . '/Post.php';

// new をしたときにそのクラスが読み込まれていなかったら呼ばれる関数
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
