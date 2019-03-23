<?php

/**
 *
 * セッションを扱う為のクラス
 *
 * Class SessionStorage
 */
class SessionStorage
{
    function __construct($cookieName = 'PHP_SESS_ID_Change')
    {
        session_name($cookieName);
        session_start();
    }

    function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    function get($key)
    {
        return $_SESSION[$key];
    }

}

/**
 *
 * ユーザが仕様する言語を取得したり、設定したりする
 *
 * Class User
 */
class User
{
    protected $storage;

    function __construct(SessionStorage $storage)
    {
        $this->storage = $storage;
    }

    function setLanguage($language)
    {
        $this->storage->set('language', $language);
        var_dump($_COOKIE);
    }

    function getLanguage()
    {
        return $this->storage->get('language');
    }
}

$sessionStrage  =  new SessionStorage(' DI_SESSION_ID');
$user = new User($sessionStrage);
$user->setLanguage('jp');
$user_language = $user->getLanguage();

echo  "使っている言語は{$user_language}です";