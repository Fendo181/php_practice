<?php
function sum(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }

  return $total;
}

echo sum(1,3,5).PHP_EOL;
echo sum(10,20,3).PHP_EOL;
