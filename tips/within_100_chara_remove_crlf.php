<?php

$str = <<<EOT
ハッカーは問題を解決し、物事を築きます。
そして自由と自発的な助け合いを信条としています。
ハッカーとして受け入れられるには、こういう姿勢態度を持つようなふるまいが必要です。
本当にその心構えを信じるしかありません。
EOT;

echo mb_strlen($str);
// 100文字以内に収める。
$str_witin_100 = mb_substr($str, 0, 100);

str_replace("\r\n", '', $text);
echo mb_strlen($str_witin_100);
