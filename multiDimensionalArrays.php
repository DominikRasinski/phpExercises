<?php

$people = array(
    'online' => array('David', 'Mark'),
    'offline' => array('Tomek', 'Dominik', 'Karolina'),
    'away' => array('Artur', 'Adam'),
);

echo $people['online'][0] . '</br>'; //aby uzuskac dostep do daneggo wymiaru tablicy nalezy:
// podac tablice nadrzedna w tym przypadku '$people' -> nazwe danego wymiaru i indeks wartosci w tym wymiarze

/**
 * Lepszym pomyslem na zapisywanie kluczy wymiarow jest moim zdanie podawanie wartosci liczbowych 
 * tak jak to wyglada w jezykach typu C++, bardziej intuicyjne
 */

 $peopleV2 = array(
     1 => array('Jacek', 'Roman'),
     2 => array('Ola', 'Angela', 'Monika'),
     3 => array('Rafał', 'Konrad'),
 );

echo $peopleV2[2][0];