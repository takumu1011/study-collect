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
    <h1>include_onceで外部ファイル読み込み</h1>
    <p>includeはファイル読み込みが失敗した場合：警告(Warning)で処理を継続する。</p>
    <pre>
        <code>
            &lt;?php
                include_once 'include.php';
            ?&gt;
        </code>
    </pre>
    <?php
        include_once "include.php";
    ?>

    <h1>require_onceで外部ファイル読み込み</h1>
    <p>requireはファイル読み込みが失敗した場合：エラー(Fatal)で処理を停止する。</p>
    <pre>
        <code>
            &lt;?php
                require_once 'require.php';
            ?&gt;
        </code>
    </pre>
    <?php 
        require_once 'require.php';
    ?>