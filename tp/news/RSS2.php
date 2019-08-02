<?php


class RSS2
{
    private $articles = [];

    /**
     * RSS2 constructor.
     * 'https://www.france24.com/fr/decouvertes/rss'
     * @param string $url
     * @throws Exception
     */
    public function __construct(string $url)
    {
        $rss = new SimpleXMLElement($url, null, true);

        foreach ($rss->channel->item as $item) {
            $article = new Article();
            $article->setTitle($item->title)
                    ->setAuteur($item->author)
                    ->setDescription($item->description)
                    ->setUrl($item->link)
                    ->setPublishedDate(new DateTime($item->pubDate));

            if (isset($item->thumbnail['url'])) {
                $article->setImageUrl($item->thumbnail['url']);
            }

            $this->articles[] = $article;
        }
    }

    public function  getArticles()
    {
        return $this->articles;
    }
}