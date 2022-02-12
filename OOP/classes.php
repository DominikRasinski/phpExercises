<?php

// definiowanie klasy z pusta wlaciwoscia $age oraz z metoda speak obie wartosci maja zasieg publiczy
// czyli sa dostepne dla kazdego z kazdego poziomu kodu kiedy bedziemy sie chcieli odwolac do wlasciwosci $age

class Person {
    public $age;

    public $height;

    public function speak() {
        echo "Hi!" . "</br>";
    }

    public function convertHeightToMilimeters(){
        echo ($this->height * 10); // metoda wykorzystujaca pseudo-zmienna 'this', ktora referuje do obiektu wywolujacego
        // i automatycznie ma dostep do publicznych wlasiwosci klasy
    }

}

// tworzenie istancji klasy czyli obiektu na podstawie tej klasy

$dominik = new Person();

// aby uzykac dostep do publicznych walasciwosci klasy jak i metod wykorzystuje sie
// konstrukt strzelkowy czyli instancja_klasy->wlasiwosc_klasy

$dominik->age = 22; //przypisanie do wlasicwosci $age wartosci

echo $dominik->age . "</br>";

$dominik->speak(); //wywolanie metody w obiekcie

$dominik->height = 183; 

$dominik->convertHeightToMilimeters();