<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/20
 * Time: 9:34
 */

function e(string $str, string $cahrset = 'UTF-8'): string
{
    return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, $cahrset);
}
