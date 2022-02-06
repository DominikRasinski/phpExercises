<?php

//Zmienne super globalne to zmienne predefiniowane, do ktorych dostep mamy zawsze i wszedzie czyli w 
// kazdej klasie, funkcji itd. 

echo $_SERVER['SCRIPT_NAME']; //zmienna wraz z tablica i indeksem 'SCRIPT_NAME' zwroca sciazke do pliku kodu

// Oczywiscie jak sama nazwa zmiennej globalnej wskazuje to ona przetrzymuje wszystkie informacje na temat
// naszego serwera ponizej jest 

echo '</br>';
foreach($_SERVER as $key => $value) // zmienna $_SERVER jest tak naprawde tablica asocjacyjna dlatego mozna z niej wyciagnac wszystkie informacje na temat serwera za pomoca foreach
{
    echo $key . ' => ' . $value . '</br>';
}