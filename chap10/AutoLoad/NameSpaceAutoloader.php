<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/03
 * Time: 9:11
 */

spl_autoload_register(function ($fqcn) {
    // クラスファイルの保存先
    $prefix = 'lib/';

    // 完全修飾名($fqcn)の最後の「\」を特定する
    $nsPos = strripos($fqcn, '\\');
    // 「\」がない場合はそのままインポートする
    if ($nsPos === false) {
        $path = $prefix.$fqcn.'.php';
        // 名前空間を利用している場合には、パスに変換した上でインポート
    } else {
        $ns = substr($fqcn, 0, $nsPos);
        var_dump($ns); //chap10\AutoLoad\lib

        $scn = substr($fqcn, $nsPos + 1);
        var_dump($scn); //"Person"

        $path = str_replace('\\', '/', $ns).'/'.$scn.'.php';
    }

    require_once $path;
});
