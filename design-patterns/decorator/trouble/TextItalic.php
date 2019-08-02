<?php


class TextItalic extends Text
{
    public function getContent(): string
    {
        return '<em>' .  parent::getContent() . '</em>';
    }
}