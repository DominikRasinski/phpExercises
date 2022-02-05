<?php

//asocjacyjne tablice wykorzystuja klucze aby dobierac sie do elementow zapisanych w tablicy
//w uproszczeniu to wyglada to tak key => value 

$people = array("David" => 23, "Amy" => 11);

echo $people['Amy'] . '</br>';
echo $people['David'] . '</br>';

//edytowanie tablicy asocjacyjnej moze zajsc za pomoca odwolania sie do klucza

$people['Amy'] = 30;

echo $people['Amy'] . '</br>';

// wysiwetlanie tablic asocjacyjnych do tego telu uzywa sie petli foreach jest wykorzystywana wlasnie dow wyswietlania zawartowsci
// tablic asocjacyjnych oraz obiektow

foreach($people as $key => $value) //petla przechodzi po tablicy i wybiera z niej klucza oraz przypisuje jego wartosc do zmiennej '$key' i zawartosc tych kluczy do zmiennej '$value'
{
    echo $key . " -> " .  $value . '</br>';
}