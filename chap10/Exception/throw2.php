<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/18
 * Time: 8:59
 */

// 自作の例外クラスを定義する
// 必ずEcceptionクラスを継承する。
class UrlSyntaxException extends Exception
{
};
class UrlRequestException extends Exception
{
};

class MyUtil
{
    public static function getContents(string $url): string
    {
        // 指定されたURLの形が正しくない場合...
        if (!preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?)|', $url)) {
            throw new  UrlSyntaxException('不正なURLの形式です！');
        }

        $data = @file_get_contents($url);

        //データを取得できなかった場合
        if (!$data) {
            throw new UrlRequestException('指定されたURLが見つかりません。');
        }
        return $data;
    }
}

//例外処理
// catch(Exception)でやると、全ての例外クラスのスーパクラスなので、細かく細くする事ができない
try {
    print MyUtil::getContents('http://wwww.wings.msn.to/nothing/');
} catch (UrlSyntaxException $exception) {
    print "警告: {$exception->getMessage()}";
} catch (UrlRequestException $exception) {
    print "エラー: {$exception->getMessage()}";
};
