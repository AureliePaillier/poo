<?php


class Italic implements Decorable
{
    private $decorator;

    public function __construct(Decorable $decorator)
    {
        $this->decorator = $decorator;
    }

    public function __toString(): string
    {
        return '<em>' . $this->decorator->__toString() . '</em>';
    }
}