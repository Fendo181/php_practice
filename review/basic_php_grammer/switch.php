<?php

$signal = 'blue';

// if ($signal === 'red') {
//   echo 'Stop!' . PHP_EOL;
// } elseif ($signal === 'yellow') {
//   echo 'Caution!' . PHP_EOL;
// } elseif ($signal === 'blue'){
//   echo 'Go!' . PHP_EOL;
// }

// switchに置き換える

switch ($signal) {
  case 'red':
      echo 'Stop!' . PHP_EOL;
      break;
  case 'yellow':
     echo 'Caution!' . PHP_EOL;
     break;
  case 'blue':
      echo 'Go!' . PHP_EOL;
      break;
}
