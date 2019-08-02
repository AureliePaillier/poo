<?php

require './tv.php';
require './Telecommande.php';

$tv = new Tv();
$telecommande = new Telecommande($tv);

/*
echo $tv->getVolume();
$telecommande->addVolume()->addVolume();
*/

for ($i = 0; $i < 105; $i++) {
//  $telecommande->addVolume();
    $telecommande->removeVolume();
}

echo $tv->getVolume();

// Pas besoin d'instancier class, qd const.
// echo Tv::VOLUME_MAX;


