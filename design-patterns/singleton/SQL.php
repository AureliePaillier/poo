<?php


class SQL
{
    static $counter = 0;

    public function select()
    {
        echo 'SELECT * FROM mytable <br>';
        self::$counter++;
    }

    static public  function getCounter(): int
    {
        return self::$counter;
    }
}
