<?php


class Telecommande
{
    /**
     * @var Tv
     */
    private $tv;

    public function __construct(Tv $tv)
    {
        $this->tv = $tv;
    }

    public function addVolume()
    {
        $this->tv->increaseVolume();
        return $this;
    }

    public function removeVolume()
    {
        $this->tv->decreaseVolume();
        return $this;
    }
}