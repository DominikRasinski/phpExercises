<?php

$arrayNotSorted = array(11, -2, 4, 35, 0, 8, -9);

class SortArray //deklaracja klasy
{

    private $notSort = array(); //deklaracja prywatnej zmienne typu tablicy

    public function addNotSortedArray($needArray) //deklaracja funckji publicznej ktora dodaje do prywatnej tablicy nie tablice dodana za pomoca argumentu
    {
        $this->notSort = $needArray; //przypisanie wartosci z tablicy podanej argumentem do prywatnej tablicy
    }

    public function sortNotSortedArray() //deklaracja funkcji sortujacej
    {
        $sortedArray = $this->notSort; //przypisanie do nowej zmiennej, wartosci z zmiennej prywtnej
        sort($sortedArray); //wykonanie sortowania na zmiennej za pomoca metody "sort"

        return $sortedArray; //zwrocenie tablicy posortowanej
    }
}

$sortArray = new SortArray; //inicjalizacja klasy i przypisanie referencji do niej do zmiennej
$sortArray->addNotSortedArray($arrayNotSorted); //wywolanie i inicjalizacja, za pomoca referencji funckji publicznej ktora dodaje
//tablice podana za pomoca argumentu do zminnej prywatnej, do ktorej mamy dostep za pomoca funkcji publicznej
print_r($sortArray->sortNotSortedArray()) . "\n"; //print_r wyswietla informacje na temat zmiennej oraz wyswietla 

?>