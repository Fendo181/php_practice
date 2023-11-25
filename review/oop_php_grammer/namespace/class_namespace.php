<?php

use Dotinstall\MyPHPApp;

require('Post.php');

// requireしたときのPost.phpではなく、class Postが定義されているPost.phpを呼び出す。
class Post {
  //  Fatal error: Cannot declare class Post, because the name is already in use in /home/dotinstall/Post.php on line 3
}

// 名前空間を指定してないと、クラスで定義したPostクラスが呼び出される
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');

$posts[0] = new MyPHPApp\Post('hello');
$posts[1] = new MyPHPApp\Post('hello again');

foreach ($posts as $post) {
  $post->show();
}
