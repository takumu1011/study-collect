<?php
    date_default_timezone_set('Asia/Tokyo');

    $url="https://www.city.shikokuchuo.ehime.jp/rss_news.xml";
    $max=5;

    //simplexml_load_file()でRSSをパースしてオブジェクトを取得、オブジェクトが空でなかればブロック内を処理
    if($rss=simplexml_load_file($url)){
        $cnt=0;
        $output='';


        foreach($rss->channel->item as $item){
            if($cnt>=$max) break;

            $date=date('Y年m月d',strtotime($item->pubDate));
            $output.='<a href="'.$item->link.'">'.$date."".$item->title.'</a><br>';
            $cnt++;
        }
        echo $output;
    }

?>