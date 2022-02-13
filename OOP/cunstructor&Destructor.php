<?php

class Person{
    public function __construct() // metoda __construct jest metoda ktora jest automatycznie wywolywana przy tworzeniu instancji klasy
    {
        echo "Obiekt został stworzony :D" . "</br>";
    }
    public function __destruct() // metoda __destruct jest dosc podobna do metody __construct tyle, ze zamiast cos tworzyc to niszczy obiekt automatycznie po wykonaniu skryptu
    {
        echo "Obiekt po wykonaniu skryptu jest automatycznie nisczony aby zwolnic zasoby" . "</br>";
    }
}

class PersonMoreInfo{
    public $age; // definiowanie wlasciwosci klasy
    public $name;

    public function __construct($name, $age) // metoda przyjmuje parametry ktore zostana przekazane podczas tworzenia instancji klasy
    {
        $this->name = $name; // przypisanie wartosci parametru do walasciwosci $name
        $this->age = $age;
    }
    public function getInfoAboutPerson()
    {
        echo "Name: " . $this->name . " and you have " . $this->age . " years" . "</br>"; // $this->name referuje do wlasciwosci klasy, ktora zostala
        // zdefiniowana i zostala do niej przypisana wartosc przy tworzeniu instancji klasy, za pomoca metody __construct
    }
    public function __destruct()
    {
        echo "Object was destroyed enjoy :D" . "</br>";
    }
}

$dominik = new Person(); // tworzenie istancji klasy, czyli obiektu 

$tomas = new PersonMoreInfo("Tomas", 25); // przypisywanie do wlasicwosci wartosci

$tomas->getInfoAboutPerson(); // metoda zwracajaca wartosci wlasciwosci w stringu


// aby wykonac jawnie destructor na instancji klasy nalezy wykorzystac funkcje unset()

$ammy = new PersonMoreInfo("Ammy", 30);
unset($ammy); // wykonanie funckji unset na obiekcie $ammy