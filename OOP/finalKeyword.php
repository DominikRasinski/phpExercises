<?php

/**
 * Słowo kluczowe PHP final definiuje metody, których nie można przesłonić w klasach potomnych.
 * Klasy zdefiniowane jako final nie mogą być dziedziczone.
 */

 class Human {
    final function speak()
    {
        echo "Hello I'm Human";
    }
 }

 class Dog extends Human {
     function speak() // proba nadpisania funckji speak zwroci blad poniewaz jest ona oznaczona jako 'final'
     {
         echo "Hau Hau";
     }
 }