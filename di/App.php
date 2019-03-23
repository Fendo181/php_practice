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

    function __construct()
    {
        $this->storage = new SessionStorage();
    }

    function setLanguage($language)
    {
        $this->storage->set('language', $language);
    }

    function getLanguage()
    {
        return $this->storage->get('language');
    }
}

$user = new User();
$user->setLanguage('jp');
$user_language = $user->getLanguage();

echo  "使っている言語は{$user_language}です";