<?php

$filename = 'news.cache';
$nbTest = 40;
$timeStart = microtime(true);

for ($i = 0; $i < $nbTest; $i++) {

    if (!file_exists($filename) || (time() - filemtime($filename)) > 5) {

        // début mise en tampon
        ob_start();

        require_once './Article.php';
        require_once './RSS2.php';



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

        // la page ne s'affiche plus
        $content = ob_get_clean();
        // créé le fichier news.cache (rafraichir navigateur pour qu'il se créé)
        file_put_contents($filename, $content);
        // la page s'affiche à nouveau
        echo  $content;
    } else {
        echo file_get_contents($filename);
    }
}

$timeEnd = microtime(true);
$time = $timeEnd-$timeStart;

echo  'Duration : ' . $time;