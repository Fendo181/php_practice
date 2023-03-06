<?php

function getStats(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return [$total, $total/count($numbers)];
}

print_r(getStats(10,20,30));

// それぞれの変数に値に入る。
list($sum,$average) = getStats(10,20,30);

echo $sum.PHP_EOL;
echo $average.PHP_EOL;
