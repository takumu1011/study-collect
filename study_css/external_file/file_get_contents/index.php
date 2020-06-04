<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="ALL">
    <!-- noindex,nofollow -->
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <title>DEV TEMPLATE GULP</title>
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <!-- website, blog -->
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
            border-bottom: 5px solid #000;
        }
        hr{
            border-bottom: 5px solid #000;
        }
        span{
            color: red;
        }
        h2{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>file関数とfile_get_contents関数</h1>
    <pre>
        <h2>file_get_contents関数</h2>
        <code>
    
        $fileGet=file_get_contents("file.html");
        echo $fileGet;
  
        </code>
    </pre>
    <?php
        $fileGet=file_get_contents("file.html");
        echo $fileGet."<span>←file_get_contentsは文字列で取得する</span><br>";
    ?>

    <hr>
    <pre>
        <h2>file関数</h2>
        <code>
            $file=file("file.html");
            echo $file;
            echo var_dump($file);
            echo $file[38];
        </code>
    </pre>


    <?php 

        $file=file("file.html");
        echo $file."<span>←file関数は配列で取得のためArrayと表示される</span><br>";
        echo var_dump($file)."<span>←配列内容表示</span><br>";
        echo $file[38]."<span>←配列番号指定して表示</span><br>";
    ?>

</body>

</html>