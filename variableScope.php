<?php

$name = "Dominik"; //zmienna ma zakres globalny i nie jest dostepna w funkcji 

function getName()
{
    $surname = "Rasiński"; //zmienna o zasiegu lokalnym do niej ma tylko dostep funkcja w ktorej powstala, po za funkcja zmienna $surname nie istnieje
    global $name; //aby zmienna globalna byla dostepna w zakresie funkcji musi byc poprzedzona slowem global
    echo "Imię to: " . $name . "</br>";
    echo "Nazwisko to: " . $surname;
}

getName();