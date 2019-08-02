<?php
require './Text.php';
require './TextStrong.php';
require './TextItalic.php';
require './TextStrongItalic.php';

$text = new TextStrongItalic('Hi everyone. Make some troubles');

echo $text->getContent();
