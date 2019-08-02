<?php


class FlyAnimation
{
    private $flyables = [];

    public function add(Flyable $flyable)
    {
        $this->flyables [] = $flyable;
        return $this;
    }

    public function start()
    {
        foreach ($this->flyables as $flyable) {
            $flyable->fly();
        }
    }

}