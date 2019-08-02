<?php

    require './Article.php';
    require './RSS2.php';

    $nbTest = 40;
    $timeStart = microtime(true);

    // poe54/poo/tp/news/index.php

    // header('Content-Type: text.xml');

    // echo file_get_contents('https://www.france24.com/fr/decouvertes/rss');

    // echo $rss['version'];
    // echo $rss->channel->lastBuildDate;
    // echo $rss->channel->item[1]->title;

    $france24 = new RSS2('https://www.france24.com/fr/decouvertes/rss');
    $nasa = new RSS2('http://www.nasa.gov/rss/dyn/breaking_news.rss');

    // $arr = $nasa->getArticles() + $france24->getArticles();

    $arr = array_merge($nasa->getArticles(), $france24->getArticles());

    shuffle($arr);
    $news = array_slice($arr, 0, 20);
    // print_r(array_merge(['a', 'b'] + ['c', 'd']));

    include 'articles.phtml';

    $timeEnd = microtime(true);
    $time = $timeEnd-$timeStart;

    echo  'Duration : ' . $time;