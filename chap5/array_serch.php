<?php

$data = ['endo', 'takahashi', 'mitani'];
var_dump(array_search('endo', $data)); #0
var_dump(array_search('mitani', $data)); #2
var_dump(array_search('yokota', $data)); #false

