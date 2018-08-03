<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/03
 * Time: 9:01
 */

// オートローダを登録する為の関数です
spl_autoload_register(function ($name){
    require_once "Class/$name.php";
});