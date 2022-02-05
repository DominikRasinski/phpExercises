<?php

define("SUNTEMP", 5505); //slowo kluczowe define jest sotosowane do tworzenia stałych zmiennych 
//pierwszy argumentem w define jest nazwa stalej, drugim argumentem jest wartosc stalej
//###Trzecim argumentem define jest case-insensitive, gdzie mozna ustawic wartosc true co spowoduje, ze stala nie bedzie 
//miala rozruzniane wielkosci liter w nazwie, domyslnie ta wartosc jest ustawiona na false
//define(name, value, case-insensitive)

echo "Temperature of the SUN is " . SUNTEMP . " deg C";


// VVV kod ponizej spowoduje blad poniewaz case-insensitive nie jest juz wpierany w php
// define("ORBIT", 366, true);
// echo "Okres orbitalny ziemi to: " . orbit . " dni";

