<?php

class Text implements Decorable
{
    private $content = '';

    public function __construct(string $content)
    {
        $this->setContent($content);
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Text
     */
    public function setContent(string $content): Text
    {
        $this->content = $content;
        return $this;
    }

    public function __toString(): string
    {
       return $this->getContent();
    }

}