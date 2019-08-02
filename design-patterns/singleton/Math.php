<?php


class Math
{
    const PI = M_PI;

    static private  $value = 0;

    static public function addition(float $a, float$b) : float
    {
        return $a + $b;
    }

    static public function getValue()
    {
        return self::$value;
    }

    static public function setValue(float $value)
    {
        self::$value = $value;
    }

}