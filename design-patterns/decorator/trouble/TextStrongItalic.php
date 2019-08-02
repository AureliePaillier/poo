<?php


class TextStrongItalic extends TextItalic
{
    public function getContent(): string
{
    return '<strong>' .  parent::getContent() . '</strong>';
}
}