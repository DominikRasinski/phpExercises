<?php

/**
 * Klasy abstrakcyjne mogą być dziedziczone, ale nie można ich tworzyć. 
 * Oferują one tę zaletę, że mogą zawierać zarówno metody z definicjami,
 * jak i metody abstrakcyjne, które nie są zdefiniowane, dopóki nie zostaną odziedziczone.
 * Klasa dziedzicząca po klasie abstrakcyjnej musi implementować wszystkie metody abstrakcyjne.
 * Słowo kluczowe abstract służy do tworzenia klasy abstrakcyjnej lub metody abstrakcyjnej.
 * Funkcje abstrakcyjne mogą pojawiać się tylko w klasie abstrakcyjnej.
 */

 abstract class Fruit {
    private $color;

    abstract public function eat(); // metoda abstrakcyjna, ktora nie zostanie odziedziczona poki nie zostanie zaimplementowa
    // w dziedziczacej klasie

    public function setColor($color) 
    {
        $this->color = $color;
    }

    public function getColor()
    {
        echo "Color is: " . $this->color . "</br>";
    }

    public function __destruct()
    {
        echo "Object was destroyed";
    }
 }

 class Apple extends Fruit {
    public function eat() // implementacja metody abstrakcyjnej
    {
        echo "Omnomnom" . "</br>";
    }
 }

 $apple = new Apple;

 $apple->setColor("red");
 $apple->getColor();

 $apple->eat();