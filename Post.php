<?php

class Post
{
    // public $title;
    /**
     * @var
     */
    private $title = '';
    private $content;
    private $createdAt;

    /**
     * Post constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->setCreatedAt(new DateTime());
    }

    /**
     * @param mixed $title
     * @var string
     */
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param mixed $content
     */
    public function setContent(string $content) : void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt(DateTime $createdAt) : void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

}