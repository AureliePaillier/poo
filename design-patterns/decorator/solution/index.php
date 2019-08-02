<?php
// Solution/index.php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

/*
require './Decorable.php';
require './Text.php';
require './Strong.php';
require './Italic.php';
*/

// print_r($_POST);

$decorators = ['strong', 'italic'];
// $usersChoices = ['strong', 'italic'];
$choices =$_POST;
// $text = new Italic(new Strong(new Text('Top of the World')));
$text = new Text('Top of the world');

/*foreach ($usersChoices as $decorator){
    $className=ucfirst($decorator);
    $text = new $className($text);
}*/
if (!empty($_POST)) {
    foreach ($choices['choices'] as $decorator) {
        $className = ucfirst($decorator);
        $text = new $className($text);
    }
}

echo $text;
include './form.phtml';