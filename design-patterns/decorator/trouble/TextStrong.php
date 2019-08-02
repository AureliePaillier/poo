<?php
class TextStrong extends Text
{
    public function getContent(): string
    {
        return '<strong>' .  parent::getContent() . '</strong>';
    }
}