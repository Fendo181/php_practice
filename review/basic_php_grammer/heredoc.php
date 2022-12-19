<?php

// 展開しないドキュメントをnowdoc
// 展開するドキュメントをheredoc

$name = 'bob';
$text = <<< "EOT"
hello $name!
    this is loooong text
EOT;

echo $text;