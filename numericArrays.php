<?php

//nazwa numericArrays niech nie zwodzi, poniewaz ona sie odnosi tylko do tego jak sa dostepne dane zapisane w tablicy
//czyli jakie indeksy sa wykorzystywane do sortowania danych w tablicy czyli w tej tablicy odnosimy sie do wartosci za pomoca liczb 
//nazwa_tablicy[1] - z tablicy wybieramy element ktory lezy na indeksie 1

$names = array('Dominik', 'Dawid', 'Karolina'); //jak mozna zauwazyc tablice numeryczne moga przetrzymywac zmienne typu string

echo $names[0] . "</br>";
echo $names[1] . "</br>";
echo $names[2] . "</br>";

$ages = array(22, 19, 25);

echo $names[0] . " " . $ages[0] . "</br>";
echo $names[1] . " " . $ages[1] . "</br>";
echo $names[2] . " " . $ages[2] . "</br>";
