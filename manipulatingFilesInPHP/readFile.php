<?php

$read = file('userInfo.txt'); //metoda 'file' odczytuje zawartosc pliku i zwraca ja w postaci tablicy

$count = count($read); //zliczanie elementow w tablicy za pomoca metody 'count'
$i = 1;

foreach($read as $line){
    echo $line;
    if($i < $count){ //kod opowiadajacy za nie tworzenie '</br>' na koncu takstu
        echo "</br>";
    }
    $i++;
}