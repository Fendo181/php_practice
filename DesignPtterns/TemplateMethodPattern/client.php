<?php

require_once 'ListDisplay.php';
require_once 'TableDisplay.php';

$data = [
    'Design Patter',
    'GoF',
    'Gang of Four',
    'Sample Code fo Gang'
];

$display1 = new ListDisplay($data);
$display2 = new TableDisplay($data);

$display1->display();

echo PHP_EOL;

$display2->display();
