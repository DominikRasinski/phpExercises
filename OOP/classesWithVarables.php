<?php

class ClassWithVarable
{
    public function text($value)
    {
        echo 'Hello All, I am' . $value . "\n";
    }
}

$varableClass = new ClassWithVarable;
$varableClass->text('Dominik');