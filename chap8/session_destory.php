<?php
session_start();
$_SESSION = [];


//クッキーが存在する場合に破棄する
if (isset($_COOKIE[session_name()])) {
    $cparam = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time()-3600,
        $cparam['path'],
        $cparam['domain'],
        $cparam['secure'],
        $cparam['httponly']
    );
    echo "SESSIONクッキーを破棄しました";
}

// セッション破棄
session_destroy();
echo "セッションを破棄しました。";
