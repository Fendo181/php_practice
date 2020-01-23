<?php

function free($age) {
    if($age >= 18) return 'OK!';
    if($age > 15) return 'So So';
    if($age < 18) return 'NO!;';
}

$result = free(18);
echo $result;