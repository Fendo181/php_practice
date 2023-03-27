<?php

require_once 'vendor/autoload.php';

$name = 'Endu';
$age = 29;
$scores = [30, 40, 50, 60, 70, 80];
array_splice($scores,2,3);

eval(\Psy\sh());
