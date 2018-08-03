<?php

class MyUtil
{
    public static function getContents(string $url): string
    {
        // 指定されたURLの形が正しくない場合...
        if (!preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?)|', $url)) {
            throw new  Exception('不正なURLの形式です！');
        }

        $data = @file_get_contents($url);

        //データを取得できなかった場合
        if (!$data) {
            throw new Exception('指定されたURLが見つかりません。');
        }
        return $data;
    }
}

//例外処理
try {
    print MyUtil::getContents('http://wwww.wings.msn.to/nothing/');
} catch (Exception $exception) {
    print "エラーメッセージ: {$exception->getMessage()}";
};
