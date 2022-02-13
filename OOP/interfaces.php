<?php

/**
 * Interfejs określa listę metod, które klasa musi zaimplementować. 
 * Jednak sam interfejs nie zawiera żadnych implementacji metod.
 * Jest to ważny aspekt interfejsów, ponieważ pozwala na inną obsługę metody w każdej klasie, która korzysta z interfejsu.
 * Słowo kluczowe interface definiuje interfejs.
 * Słowo kluczowe implements jest używane w klasie do implementacji interfejsu.
 * Wszystkie metody określone w interfejsie wymagają widoczności publicznej.
 */

interface HumanInterface {
    public function emotion();
}

class Human implements HumanInterface{
    public function emotion()
    {
        echo "Love you!" . "</br>";
    }
}

class Robots implements HumanInterface{
    public function emotion()
    {
        echo "I don't have any emontions" . "</br>";
    }
}

$domink = new Human;
$domink->emotion();

$ai = new Robots;
$ai->emotion();

/**
 * Klasa może implementować wiele interfejsów.
 * Można określić więcej niż jeden interfejs, oddzielając je przecinkami. Na przykład:
 */

// class Demo implements AInterface, BInterface, CInterface {

    // Functions declared in interfaces must be defined here
  
//   }