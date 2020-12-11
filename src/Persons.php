<?php

namespace LaravelSchema\Persons;

class Persons
{
    public function holamundo(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}