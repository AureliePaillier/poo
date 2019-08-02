<?php

/*
 * Si erreurs ne s'affichent pas:
 * ini_set('display_errors', 1);
*/
require  'File.php';

$file = new File();

try {
    $content = $file->read('./content.txt');
    //$content = $file->read([]);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
} catch(Exception $e) {
    // fopen ouvre un fichier ou une url
    fopen('./content.txt', 'a+');
    echo $e->getMessage();
// finally équivaut à un catch
} finally {
    echo "Fin de l'histoire";
}

echo 'Test';