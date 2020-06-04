<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta name="robots" content="ALL"><!-- noindex,nofollow -->
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<title>DEV TEMPLATE GULP</title>
<meta name="description" content="">
<meta name="format-detection" content="telephone=no,address=no,email=no">
<meta property="og:title" content="">
<meta property="og:type" content="website"><!-- website, blog -->
<meta property="og:url" content="">
<meta property="og:image" content="">
<meta property="og:site_name" content="">
<meta property="og:description" content="">
<meta property="og:locale" content="ja_JP">
<meta property="og:determiner" content="タイトルの前に付く単語">
<meta property="fb:app_id" content="App-ID(15文字の半角数字)">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="">
<meta name="twitter:site" content="@[Twitter ID]">
<meta name="theme-color" content="#000000">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="mobile-web-app-capable" content="no">
<link rel="canonical" href="サイトURL">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/icon.png">
<link rel="stylesheet" href="./ assets / css / site.default.css">
<link rel="stylesheet" href="./assets/css/site.top.css">
<style>
    pre{
        background-color: yellow;
        border-top: 5px solid #000;
        border-bottom: 5px solid #000;
    }
</style>
</head>
<body>
    <h1>cURL関数</h1>
    <pre>
        <code>
        $url="https://www.google.com/";

        //新しいcURLリソースを作成
        $ch=curl_init();

        //オプションを設定
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        //URLを取得し、それをブラウザに渡す
        $res=curl_exec($ch);

        echo $res;

        //cURLリソースを閉じ、システムリソースを解放
        curl_close($conn);
        </code>
    </pre>
    <?php

        $url="https://www.google.com/";

        $ch=curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $res=curl_exec($ch);

        echo $res;

        curl_close($conn);
    ?>






</body>
</html>