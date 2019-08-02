<?php


class Tv
{
    const VOLUME_MIN = 0;
    const VOLUME_MAX = 100;

    private$volume = self::VOLUME_MIN;

    /**
     * @return int
     */
    public function increaseVolume(): self
    {
        if ($this->volume < self::VOLUME_MAX) {
            $this->volume++;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function decreaseVolume(): self
    {
        if ($this->volume > self::VOLUME_MIN) {
            $this->volume--;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }
}
