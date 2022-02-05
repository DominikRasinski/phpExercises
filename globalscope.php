<?php

$globalName = 'Dominik';

function getName()
{
    global $globalName; //aby uzyskac dostep do zmiennych globalnych w funckji, trzeba uzyc slowa "global",
                        //ktore doda wskazana zmienna globalna do zakresu funkcji
    echo $globalName;
}
getName();