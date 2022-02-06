<?php

// ciasteczka sa czesto wykorzystywane do indetyfikacji uzytkonika. Ciasteczka to male pliki, ktore sa umieszczane na komputerze uzytkownika
// za kazdym razem kiedy uzytkonik bedzie pytal o strone ciasteczka beda rowniez przesylane 

/**
 * Tworzenie cisteczek w php
 */

//  setcookie(name, value, expire, path, domain, secure, httponly);

/**
 * name: okresla nazwe ciasteczka - parametr obowiazkowy
 * value: okresla wartosc ciasteczka
 * expire: okresla w sekundach kiedy ciasteczko ma wygsnac, pominiecie lub ustawienie na 0 tego argumentu, spowoduje wygasniecie ciasteczka po zakonczeniu sesji
 * path: okresla sciezke serwera pliku cookie, na przyklad "/" podanie slasha jako warotsci spowoduje, ze plik bedzie dostepny na calej domenie i subdomenach
 * domain: okresla nazwe domeny pliku cookie, jezeli chcemy aby plik byl dostepny na wszystkich subdomenach domeny dominik.com wystarczy podac wartosc "dominik.com"
 * secure: okresla czy plik cookie powinen byc tylko dostepny w domenie posiadajacej protokol HTTPS, domyslnie jest wartosc "False" czyli nie wymaga szyfrowania aby ten plik udostepniac
 * httponly: parametr okreslajacy czy plik cookie ma byc tylko dostepny przez protokol HTTP, plik cookie nie bedzie dostepny dla jezykow skryptowych ogranicza to podadnosc na ataki XSS, domyslna warotsc "FALSE"
 */

 $value = "John";

 setcookie('user', $value, time() + (86400 * 2), '/');

 if(isset($_COOKIE['user'])) // sprawdza czy ciasteczko jest ustawione
 {
     echo "Value of cookie is: " . $_COOKIE['user'];
 }