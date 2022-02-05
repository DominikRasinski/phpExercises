<?php

function printAllValueFromAarray($array)
{
    foreach($array as $key => $value)
    {
        echo $key . ' => ' . $value . '</br>';
    }
}

//asocjacyjne tablice wykorzystuja klucze aby dobierac sie do elementow zapisanych w tablicy
//w uproszczeniu to wyglada to tak key => value 

$people = array("David" => 23, "Amy" => 11, "Damian" => 1, "Mati" => 20, "Tomek" => 56, "Aloa" => 43);

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

// nastepny sposob na szybkie wyswietlenie tablicy asocjacyjnej polega na wypisaniu jej za pomoca konsktruckji jeszykowej print_r

print_r($people); //w tym przypadku nie mamy zadnej mozliwosci modyfikacji jak sa wyswietlane dane
echo '</br>';

/**
 * Sortowanie tablic asocjacyjnych mozna wykonac na dwa sposoby
 */

//Pierwszy sposob wykorzystanie metody 'asort()' ktora sertuje tablice asoscjacyjna wedlug wartosci

echo "Sortowanie za pomoca metody 'asort()'" . '</br>';
asort($people);
printAllValueFromAarray($people);
echo '#####################################' . '</br>';

//Drugi sposob to sortowanie tablicy asocjacyjnej wedlug kluczy do czego sluzy metoda 'ksort()'

echo "Sortowanie za pomoca metody 'ksort()'" . '</br>';
ksort($people);
printAllValueFromAarray($people);
echo '#####################################' . '</br>';