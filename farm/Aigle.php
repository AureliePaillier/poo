<?php


class Aigle extends Animal implements Flyable
{
    public function move()
    {
        echo 'Je marche comme un oiseau';
    }

    public function fly()
    {
        echo 'Je vole comme un oiseau' .  "\n";
    }
}