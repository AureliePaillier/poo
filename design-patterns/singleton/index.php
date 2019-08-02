<?php

require './Math.php';

echo Math::addition(10, 50);
echo Math::PI;
echo '<br>';

Math::setValue(90);
echo Math::getValue();

function remenberMe() {
    // AVEC static, permet de fre une boucle qui ne recommence pas à chaque fois il incrémente
    // au fur et à mesure (ex: 123). Permet le partage de la mémoire.
    // SANS static, ça fait 111 car il recommence à zero à chaque fois.
    static $number = 0;
    $number++;
    return $number;
}

echo remenberMe();
echo remenberMe();
echo remenberMe();

require './SQL.php';

$sql = new SQL();
$sql->select();
$sql->select();

$sql2 = new SQL();
$sql->select();


echo SQL::getCounter();