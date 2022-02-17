<?php

/**
 * Słowo kluczowe PHP static definiuje statyczne właściwości i statyczne metody.
 * Dostęp do statycznej właściwości/metody klasy można uzyskać bez tworzenia obiektu tej klasy.
 * Dostęp do statycznej właściwości lub metody uzyskuje się przy użyciu operatora rozpoznawania zakresu :: między nazwą klasy a nazwą właściwości/metody.
 */


class Human {
    static $name = "Dominik" . "</br>";
}

echo Human::$name;

/**
 * Słowo kluczowe self jest potrzebne do uzyskania dostępu do właściwości statycznej z metody statycznej w definicji klasy.
 */

 class Car {
    static $wroom = "WROOOOOM!";
    static function carMake(){
        echo self::$wroom;
    }
 }

 Car::carMake();