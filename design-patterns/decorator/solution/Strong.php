<?php


class Strong implements Decorable
{
    private $decorator;

    public function __construct(Decorable $decorator)
    {
        $this->decorator = $decorator;
    }

    public function __toString(): string
    {
        return '<strong>' . $this->decorator->__toString() . '</strong>';
    }
}