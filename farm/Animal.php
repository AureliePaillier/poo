<?php


abstract class Animal
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var float
     */
    private $weight = 0;

    /**
     * @var integer
     */
    private $age = 0;

    /**
     * @var string
     */
    private $color = '';

    /**
     * Animal constructor.
     * @param string $name
     * @param int $age
     * @param string $color
     */
    public function __construct(string $name, int $age, string $color)
    {
        $this->setName($name)
             ->setAge($age)
             ->setColor($color);
    }


    // possible uniquement si existence class abstraite avt
    abstract public function move();

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Animal
     */
    public function setName(string $name): Animal
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return Animal
     */
    public function setWeight(float $weight): Animal
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Animal
     */
    public function setAge(int $age): Animal
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Animal
     */
    public function setColor(string $color): Animal
    {
        $this->color = $color;
        return $this;
    }

    public function __toString()
    {
        $str = 'Name: ' . $this->getName() . "\n";
        $str .= 'Age: ' . $this->getAge() . "\n";
        $str .= 'Color: ' . $this->getColor() . "\n";
        $str .= 'Weight: ' . $this->getWeight() . "\n";

        return $str;
    }
}