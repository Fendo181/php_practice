<?php
$data = ['apple', 'orange','banana','pinapple','guaba'];
print_r(array_splice($data,2,3,['endo','takahashi']));

$data = ['apple', 'orange','banana','pinapple','guaba'];
print_r(array_splice($data,-2,-3,['endo','takahashi']));

$data = ['apple', 'orange','banana','pinapple','guaba'];
print_r(array_splice($data,3));
