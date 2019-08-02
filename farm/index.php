<?php

// respecter l'ordre
require './Flyable.php';
require './FlyAnimation.php';
require './Drone.php';
require './Animal.php';
require './Aigle.php';
require './Felin.php';
require './Lion.php';
require './Chat.php';
require './Park.php';

$p = new Park();
$chat = new Chat('Saphir', 3, 'grey');
$lion = new Lion('Scarface', 5, 'gold');

/* Si on veut afficher class avant nom
echo get_class($a);
*/
/*
 * $a->setName('Simba')
  ->setColor('red')
  ->setAge(64);

* echo $a->move();
*/

$p->add($chat)
  ->add($lion);

foreach ($p->getAnimals() as $animal) {
    echo nl2br($animal);
    echo $animal->move();
    echo '<br><br>';
}

$a = new FlyAnimation();
$a->add(new Aigle('Hector', 28, 'black'));
$a->add(new Drone());
$a->start();