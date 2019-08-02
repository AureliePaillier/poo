<?php


class Article
{
    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $url = '';

    /**
     * @var string
     */
    private $description = '';

    /**
     * @var string
     */
    private $imageUrl = '';

    /**
     * @var
     */
    private $publishedDate;

    /**
     * @var string
     */
    private $auteur = '';

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Article
     */
    public function setTitle(string $title): Article
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Article
     */
    public function setUrl(string $url): Article
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Article
     */
    public function setDescription(string $description): Article
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return Article
     */
    public function setImageUrl(string $imageUrl): Article
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * @param mixed $publishedDate
     * @return Article
     */
    public function setPublishedDate($publishedDate)
    {
        $this->publishedDate = $publishedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     * @return Article
     */
    public function setAuteur(string $auteur): Article
    {
        $this->auteur = $auteur;
        return $this;
    }
}