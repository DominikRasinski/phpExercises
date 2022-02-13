<?php

/**
 * protected: Sprawia, że ​​wlasciwosci są dostępne tylko w ramach samej klasy, przez dziedziczenie i przez klasy nadrzędne.
 * private: Sprawia, że ​​wlasciwosci są dostępne tylko przez klasę, która je definiuje.
 */

class Human {
    public $name;
    public $skin;

    public function speak()
    {
        echo "Hello I'm human, and I have name " . $this->name . "</br>";
    }
    public function haveASkin()
    {
        echo "Have a skin? " . $this->skin . "</br>";
    }
    public function getSecrete(){
        $this->destroyTerminators();
    }
    private function destroyTerminators()
    {
        echo "Destroy skynet" . "</br>";
    }
}

class Terminator extends Human { // klasa terminator dziedziczy po klasie human wszystkie publiczne, prywatne i chronione metody i wlasciwosci
    public function destroyHumans()
    {
        echo "Exterminate";
    }
}


$sara = new Human;

$sara->name = "Sara";
$sara->skin = "yes";

$sara->speak();
$sara->haveASkin();
$sara->getSecrete();

$t600 = new Terminator;

$t600->name = "T-600";
$t600->skin = "yes";

$t600->speak();
$t600->haveASkin();

$t600->destroyHumans();
$t600->getSecrete();