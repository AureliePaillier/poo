<?php


class File
{
    public function read($filename)
    {
        if (!is_string($filename)) {
            throw new InvalidArgumentException(gettype($filename) . 'must be a string');
        }

        if (!file_exists($filename)) {
            throw new Exception( '$filename does not exists ');
        }
        return file_get_contents($filename);
    }
}