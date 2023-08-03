<?php

$posts = [];
$posts[0] = ['text' => 'hello','likes'=>0];
$posts[1] = ['text' => 'hello again','likes'=>0];

// print_r($posts);

function show($posts)
{
  printf('%s (%d)'.PHP_EOL,$posts['text'],$posts['likes']);

}

show($posts[0]);
show($posts[1]);
