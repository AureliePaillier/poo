<?php


class Park
{
    private $animals = [];

    public function add(Animal $animal)
    {
        $this->animals[] = $animal;
        return $this;
    }

    /**
     * @return Animal array
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }
}