<?php

$patternOK = "fuga,hoge";
$patternOK1 = "hoge,fuga";
$patternNG = "fuga,aaa";

$reg = preg_match('/^fuga|^hoge/',$patternOK1,$matche);
echo $reg;




