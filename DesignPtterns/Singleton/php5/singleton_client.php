<?php

require_once 'SingletonSample.php';


$instance1 = SingletonSample::getInstance();
sleep(1);
$instance2 = SingletonSample::getInstance();

echo 'instance1'.$instance1->getID();
echo 'instance2'.$instance2->getID();

if($instance1->getID() === $instance2->getID()) {
    echo 'IDは一緒です';
}else {
    echo 'IDは一緒じゃないです。';
}

if($instance1 === $instance2) {
    echo 'オブジェクトが一緒です';
}else {
    echo 'オブジェクトは一緒じゃないです';
}

// 複製できない
$instance1_clone = clone $instance1; // Uncaught RuntimeException: Clone is not allowed againstSingletonSample

