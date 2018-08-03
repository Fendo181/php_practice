<?php

require_once 'Human.php';

$endo = new Human();

$endo->name = "My Name Is End";
var_dump($endo->name);
// isset
var_dump(isset($endo->name)); //true

//unset
unset($endo->name);
var_dump(isset($endo->name));  //false
