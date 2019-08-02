<?php

require './DBConnection.php';

$db = DBConnection::getInstance();
/*
 *  $db2 = clone DBConnection::getInstance(); // ne s'affiche pas, n'apparait qu'une fois. clone va afficher $db2
 * $db->name = 'Urkle';
 * $db2->name = 'Screetch';
 * echo $db->name . '<br>';
 * echo $db2->name . '<br>';
*/

$stmt = $db->getPDO()->prepare('SELECT * FROM user');

if ($stmt->execute()) {
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo  '<pre>';
    print_r($users);
    echo  '</pre>';
}