<?php

class Myclass
{
    public function text()
    {
        echo 'Myclass class has initialized !'."\n";
    }
}

$firstClass = new Myclass;
$firstClass->text();